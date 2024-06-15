<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ecomersmodel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class controllereco extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request -> katakunci;
        $jumlahbaris = '5';
        if(strlen($katakunci)){
            $data = ecomersmodel::where('id','like',"%$katakunci%")
            ->orWhere('title','like',"%$katakunci%")
            ->paginate($jumlahbaris);
        }else{
        $data = ecomersmodel::orderBy('id','desc')->paginate($jumlahbaris);
    }
    return view('ecomers.index')->with('data',$data);

    $nama_user = Auth::user()->name; // Mengambil nama pengguna yang sedang login
    return view("sesi/index", compact('nama_user'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecomers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validasi keberadaan file gambar
    if (!$request->hasFile('image')) {
        return response()->json(['message' => 'Missing file'], 422);
    }
    
    // Validasi data
    $request->validate([
        'id' => 'required|numeric|unique:ecomerstb,id',
        'title' => 'required',
        'description' => 'required',
        'harga' => 'required|numeric|min:0', // Validasi harga sebagai angka dan minimal 0
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048|unique:ecomerstb,image_url',
        Rule::unique('ecomerstb', 'image_url')->where(function ($query) use ($request) {
            return $query->where('image_url', $request->file('image')->getClientOriginalName());
        }),
    ], [
        'id.required' => 'ID Wajib Diisi',
        'id.numeric' => 'ID harus berupa angka',
        'id.unique' => 'ID sudah ada dalam basis data',
        'title.required' => 'Title Wajib Diisi',
        'description.required' => 'Deskripsi Wajib Diisi',
        'harga.required' => 'Harga Wajib Diisi',
        'harga.numeric' => 'Harga harus berupa angka',
        'harga.min' => 'Harga tidak boleh kurang dari 0',
        'image.required' => 'Gambar Wajib Diunggah',
        'image.image' => 'File harus berupa gambar',
        'image.mimes' => 'Format gambar harus jpeg, png, jpg, atau gif',
        'image.max' => 'Ukuran gambar tidak boleh melebihi 2MB',
        'image.unique' => 'Gambar sudah ada', // Pesan validasi untuk gambar yang sudah ada
    ]);
    
    if ($request->hasFile('image')) {
        $image_file = $request->file('image');
        $image_name = time() . '_' . $image_file->getClientOriginalName();
        $destinationPath = 'C:\xampp\htdocs\androiddb\Menu\image'; // Path penyimpanan di luar proyek Laravel
        
        // Pindahkan file gambar ke path tujuan dengan nama unik
        $image_file->move($destinationPath, $image_name);

        $data = [
            'id' => $request->id,
            'title' => $request->title,
            'description' => $request->description,
            'harga' => $request->harga,
            'image_url' => $image_name, // Path relatif untuk disimpan ke basis data
        ];

        ecomersmodel::create($data);

        return redirect()->route('ecommers.index')->with('success', 'Berhasil Menambahkan Data');
    }

    return redirect()->back()->withInput()->with('error', 'Gagal mengunggah gambar');
}
    




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ecomersmodel::where('id',$id)->first();
        return view('ecomers.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'harga' => 'required|numeric|min:0', // Tambahkan validasi untuk harga
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah validasi menjadi tidak wajib
        ], [
            'harga.required' => 'Harga Wajib Diisi',
            'harga.numeric' => 'Harga harus berupa angka',
            'harga.min' => 'Harga tidak boleh kurang dari 0',
        ]);
    
        // Temukan data yang akan diupdate
        $data = ecomersmodel::find($id);
        if (!$data) {
            return redirect('/ecommers')->with('error', 'Data tidak ditemukan');
        }
    
        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('image')) {
            // Hapus gambar lama
            if ($data->image_url) {
                $imagePath = 'C:/xampp/htdocs/androiddb/Menu/image/'.$data->image_url;
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
    
            // Simpan gambar baru di luar proyek Laravel
            $image_file = $request->file('image');
            $image_extension = $image_file->getClientOriginalExtension();
            $image_name = date('Ymdhis').'.'.$image_extension;
            $destinationPath = 'C:/xampp/htdocs/androiddb/Menu/image'; // Path penyimpanan di luar proyek Laravel
            $image_file->move($destinationPath, $image_name);
    
            // Update nama gambar baru dalam data
            $data->image_url = $image_name;
        }
    
        // Update data lainnya
        $data->title = $request->title;
        $data->description = $request->description;
        $data->harga = $request->harga; // Tambahkan update untuk harga
        $data->save();
    
        return redirect('/ecommers')->with('success', 'Data berhasil diperbarui');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    // Temukan data yang akan dihapus
    $data = ecomersmodel::find($id);

    // Jika data tidak ditemukan
    if (!$data) {
        return redirect('/ecommers')->with('error', 'Data tidak ditemukan');
    }

    // Hapus gambar dari folder di luar proyek Laravel jika ada
    if ($data->image_url) {
        $imagePath = 'C:/xampp/htdocs/androiddb/Menu/image/' . $data->image_url;

        // Periksa apakah gambar ada sebelum dihapus
        if (File::exists($imagePath)) {
            // Hapus gambar
            File::delete($imagePath);
        } else {
            // Log atau pesan kesalahan jika gambar tidak ditemukan
            Log::error('File gambar tidak ditemukan di ' . $imagePath);
            return redirect('/ecommers')->with('error', 'File gambar tidak ditemukan');
        }
    }

    // Hapus data dari basis data
    ecomersmodel::where('id', $id)->delete();

    return redirect('/ecommers')->with('success', 'Data berhasil dihapus');
}
}