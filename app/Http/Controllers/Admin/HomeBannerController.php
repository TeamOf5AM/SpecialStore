<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\HomeBanner;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
class HomeBannerController extends Controller
{
    public function index()
    {
        $result['data']=HomeBanner::where('banner_type',1)->get();
        $result['home_bn']=HomeBanner::where('banner_type',2)->get();
        $result['cat_ban']=HomeBanner::where('banner_type',3)->get();
        return view('admin/home_banner',$result);
    }

    
    public function manage_home_banner(Request $request,$id='')
    {
        if($id>0){
            $arr=HomeBanner::where(['id'=>$id])->first(); 
            $result['image']=$arr->image;
            $result['btn_txt']=$arr->btn_txt;
            $result['btn_link']=$arr->btn_link;
            $result['id']=$arr->id;
            $catarr=Category::select('category_name as label','id')->where(['id'=>$arr->cat_id])->first(); 
            $result['cat_id']=$catarr['id'];
            $result['catarr']=Category::select('category_name as label','id')->get();
        }else{
            $result['image']='';
            $result['btn_txt']='';
            $result['btn_link']='';
            $result['id']="";
            $result['cat_id']='';
            $result['catarr']=Category::select('category_name as label','id')->get();
        }

        return view('admin/manage_home_banner',$result);
    }

    public function manage_home_banner_process(Request $request)
    {
        $request->validate([
            'image'=>'required|mimes:jpeg,jpg,png,webp' 
        ]);

        if($request->post('id')>0){
            $model=HomeBanner::find($request->post('id'));
            $msg="Banner updated";
        }else{
            $model=new HomeBanner();
            $msg="Banner inserted";
        }

        if($request->hasfile('image')){

            if($request->post('id')>0){
                $arrImage=DB::table('home_banners')->where(['id'=>$request->post('id')])->get();
                if(Storage::exists('/public/media/banner/'.$arrImage[0]->image)){
                    Storage::delete('/public/media/banner/'.$arrImage[0]->image);
                }
            }

            $image=$request->file('image');
            $ext=$image->extension();
            $image_name=time().'.'.$ext;
            $image->storeAs('/public/media/banner',$image_name);
            $model->image=$image_name;

        }
        $model->banner_type=$request->post('ban_type');
        $model->btn_txt=$request->post('btn_txt');
        $model->btn_link=$request->post('btn_link');
        $model->cat_id=$request->post('cat_id');
        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/home_banner');
        
    }

    public function delete(Request $request,$id){
        $model=HomeBanner::find($id);
        $model->delete();
        $request->session()->flash('message','Banner deleted');
        return redirect('admin/home_banner');
    }

    public function status(Request $request,$status,$id){
        $model=HomeBanner::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','Banner status updated');
        return redirect('admin/home_banner');
    }
    
}
