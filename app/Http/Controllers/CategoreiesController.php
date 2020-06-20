<?php

namespace App\Http\Controllers;

use App\Categoreies;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class CategoreiesController extends Controller
{
    //
    use GeneralTrait;

public function getCategorey()
{
    # code...
    $request= Categoreies::selection()->get();

   // return response()->json($request);
   return $this -> returnData('categories',$request);

}



public function getCategoreyById(Request $request)
{
    # code...
    $category= Categoreies::selection()->find($request->id);
    if(!$category){
        return $this->returnError('000','هذا القسم غير موجود');
    }

    return $this->returnData('category',$category);
}

public function changeStatus(Request $request)
    {
       //validation
       Categoreies::where('id',$request -> id) -> update(['active' =>$request ->  active]);

        return $this -> returnSuccessMessage('تم تغيير الحاله بنجاح');

    }
}
