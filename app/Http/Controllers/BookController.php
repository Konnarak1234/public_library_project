<?php

namespace App\Http\Controllers;
use App\Models\BookCategory;
use App\Models\Book;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(){
        return view ('backpage.uploadBookCategory');
    }

    public function store_category(Request $request){
        	 $category = new BookCategory();

             $category -> create([
                'cate_name' => $request -> input('categoryName'),
                'cate_description' => $request -> input('categoryDescription'),
             ]);

             return redirect() -> back() -> with('message', 'hello');
    }

    public function bookCategory(){
        $categoryData = BookCategory::get();
        return view('backpage.bookCategory', compact('categoryData'));
    }
    
    public function uploadBook(){
        $categoryData = BookCategory::get();
        return view('backpage.uploadBook', compact('categoryData'));
    }

    public function edit_category(int $id){
        $categoryData = BookCategory::findOrFail($id);

        return view('backpage.editBookCategory', compact('categoryData'));

    }

    public function update_category(Request $request, int $id){
        $category = BookCategory::findOrFail($id);

        $category -> update(
            [
                'cate_name' => $request -> input('categoryName'),
                'cate_description' => $request -> input('categoryDescription')

            ]);

        return redirect() -> back() -> with('message', 'hello');
    }

    // update soon
    public function delete_category(int $id){
        $category = BookCategory::findOrFail($id);
        $books = Book::get();
        $path = 'upload/bookCover/';

        foreach($books as $book){
            if(($book -> book_cate_id) == $id and ($book -> book_image) != $path.'root.jpg'){
                File::delete($book -> book_image);
            }
        }
     

        $category -> delete();
        
        return redirect() -> back();
    }

    // delete_category, must delete all book in those specific category, so all book image will have delete too.
    public function store_book(Request $request){
        $bookData = new Book();

        if($request -> has('bookImage')){ // check whether we get upload file from $request or not <=> isset()
            $file = $request->file('bookImage'); // variable that handle file
            $extension = $file -> getClientOriginalExtension(); // get the file extension
            $filename = time().'.'.$extension; // create file name
            $path = 'upload/bookCover/'; // declare specific path
            $path2 = 'D:/Laravel_Project/BOOK/BOOK/'.$filename;
            $file -> move($path, $filename); // move the file to specific directory

            Storage::move( $path2, $path.$filename);
        } else {
            $path = 'upload/bookCover/';
            $filename = 'root.jpg';
        }

        $bookData -> create([
        'book_name' => $request -> input('bookName'),
        'book_cate_id' => $request -> input('bookCategory'),
        'book_author' => $request -> input('bookAuthor'),
        'book_publiser' => $request -> input('bookPubliser'),
        'book_description' => $request -> input('bookDescription'),
        'book_image' => $path.$filename,
        'book_source' => $request -> input('bookSource')
        ]);

        return redirect() -> back() -> with('message', 'hello');
    }

    public function bookInformation(){
        $category = BookCategory::get();
        $bookData = Book::get();
        
        return view('backpage.bookInformation', compact('bookData', 'category'));
    }

    public function edit_book(int $id){
        $categoryData = BookCategory::get();
        $bookData = Book::findOrFail($id);

        return view('backpage.editBook', compact('bookData', 'categoryData'));
    }
    
    public function update_book(Request $request, int $id){
        $book = Book::findOrFail($id);
        $path = 'upload/bookCover/';

        if($request -> has('bookImage')){
            $file = $request ->file('bookImage');
            $extension = $file -> getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move($path, $filename);
            if(File::exists($book -> book_image) and $book -> book_image != $path.'root.jpg'){
                File::delete($book -> book_image);
            }
        } 
        elseif($book -> book_image != $path.'root.jpg'){
            $filename = substr($book -> book_image, strlen($path), strlen($book -> book_image) - strlen($path));
        }
        else{
            $filename = 'root.jpg';
        }
        
        $book -> update([
        'book_name' => $request -> input('bookName'),
        'book_cate_id' => $request -> input('bookCategory'),
        'book_author' => $request -> input('bookAuthor'),
        'book_publiser' => $request -> input('bookPubliser'),
        'book_description' => $request -> input('bookDescription'),
        'book_image' => $path.$filename,
        'book_source' => $request -> input('bookSource')
        ]);

        return redirect() -> back() -> with('message', 'hello');
    }

    public function delete_book(int $id){
        $book = Book::findOrFail($id);
        $path = 'upload/bookCover/';

        if(File::exists($book -> book_image) and $book -> book_image != $path.'root.jpg'){
            File::delete($book -> book_image);
        }

        $book -> delete();
        return redirect() -> back();
    }

    public function homepage(){
        $category = BookCategory::get();
        $books = Book::get();
        return view('frontpage.home',  compact('books', 'category'));
    }

    public function backhomepage(){
        $category = BookCategory::get();
        $books = Book::get();
        return view('backpage.home',  compact('books', 'category'));
    }

    public function bookReview(int $id){
        $book = Book::findOrFail($id);
        $category = BookCategory::findOrFail($book -> book_cate_id);
        return view('frontpage.bookReview', compact('book', 'category'));
    }

    public function adminBookReview(int $id){
        $book = Book::findOrFail($id);
        $category = BookCategory::findOrFail($book -> book_cate_id);
        return view('backpage.bookReview', compact('book', 'category'));
    }


    public function frontHeader(){
        $category = BookCategory::get();
        $book = Book::get();
        return view('layout.Front-header', compact('category', 'book'));
    }

    public function categoryReview(int $id){
        $category = BookCategory::findOrFail($id);
        $books = Book::get();

         return view('frontpage.categoryReview', compact('category', 'books'));
    }

}
