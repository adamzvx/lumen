## Commands
```bash
composer create-project --prefer-dist laravel/lumen weblu #membuat projek API
 php -S localhost:9000 -t public #hidupkan server
php artisan make:migration ini_table_post --create=posts #membuat migrasi database
php migrate #melakukan migrasi

```

## CRUD ORM Summary
```php
	namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category',compact('categories'));
    }
    public function create()
    {
        return view('add');
    }
    public function store(Request $request)
    {
        Category::create(['slug' => $request->slug,'name' => $request->name]);
        return \redirect('category');
    }
    public function edit($id)
    {
        $categories = Category::find($id);
        return view('edit',compact('categories'));
    }
   public function update(Request $request){
     $categories = Category::where('id',$request->id)
     ->update([
        'slug' => $request->slug,
        'name' => $request->name
      ]);
     return redirect()->back();
    }
    public function delete($id)
    {
        $categories = Category::where('id',$id)->delete();
        return redirect()->back();
    }
}
```