<?php
    namespace App\Http\Controllers\admin;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;
    use App\model\admin\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $product = Product::latest()->paginate(5);
        return view('admin.products.index', compact('product'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = '';
       if($request->hasFile('image')){
           $file = $request->file('image');
           $fileName = $file->getClientOriginalName();
           $file->move('img/', $fileName);
       }
       $this->validate($request,
       [
           //Kiểm tra giá trị rỗng
           'name' => 'required',
           'detail' => 'required',
           'loaisq' => 'required',
           'gia' => 'required',
       ],
       [
           //Tùy chỉnh hiển thị thông báo
           'name.required' => 'Bạn chưa nhập tên sản phẩm!',
           'detail.required' => 'Bạn chưa nhập miêu tả!',
           'loaisq.required' => 'Bạn chưa chọn khối!',
           'gia.required' => 'Bạn chưa chọn khối!',
       ]
   );

       $product = new Product();
        $product->insert([
            'name' => $request->input('name'),
            'detail' => $request->input('detail'),
            'image' => $fileName,
            'loaisp' => $request->input('loaisp'),
            'gia' => $request->input('gia'),

        ]);
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail();
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'loaisp' => 'required',
        ]);
        $product->update([
            'name' => $request->input('name'),
            'loaisp' => $request->input('loaisp'),
            'gia' => $request->input('gia'),
        ]);
        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}



