<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\yoxlama;
class Yeni extends Controller
{
    //
    public function index(){
      $table=DB::table("categories")->select()->get();
        return view("add",compact("table"));
        }
        public function add(yoxlama $request){
           $array=array("title"=>$request->ad, "text"=>$request->editor1,"categ"=>$request->select);
           DB::table("news")->insert($array);
           $table=DB::table("categories")->select()->get();
           return view("add",compact("table"))->with("success",1);
            }
            public function list(){
              $table=DB::table("news")->join("categories","news.categ","=","categories.id")->select(DB::raw('*,news.id as newsid'))->get();
              return view("list",compact("table"));
                }
                public function deleteNews(Request $request){
                  DB::table("news")->where("id","=",$request->id)->delete();
                  return redirect()->guest('list');
                 }
                 public function categories(){
                  $table=DB::table('categories')->select()->get();

                  return view("categories",compact("table"));
                    }
                    public function addCategory(Request $request){
                      $array=array("name"=>$request->category);
                      DB::table("categories")->insert($array);
                      return redirect()->guest("categories");
                        }
                        public function deleteCategory(Request $request){
                          $say=DB::table("news")->where("categ","=",$request->id)->get()->count();
                          if($say>0){
                            return redirect()->route("categories",["error"=>1]);
                          }
                          else{
                             DB::table("categories")->where("id","=",$request->id)->delete();
                          return redirect()->guest("categories");
                            }

                          }
                          public function editNews(Request $request){
                            $table=DB::table("news")->where("id","=",$request->id)->select()->get();
                            $table2=DB::table("categories")->select()->get();

                            return view("edit",compact('table','table2'));
                          }

                          public function updateNews(Request $request){
                            $table=DB::table("news")->where("id","=",$request->id)->update(['title'=>$request->ad,"text"=>$request->editor1,'categ'=>$request->category]);
                            

                            return redirect()->guest("list");
                          }
                          public function editCategory(Request $request){
                            $table=DB::table("categories")->where("id","=",$request->id)->select()->get();
                            return view("editCategory",compact('table'));
                           }
                           public function updateCategory(Request $request){
                            $table=DB::table("categories")->where("id","=",$request->id)->update(['name'=>$request->category]);

                            return redirect()->guest("categories");
                           }
      
}
