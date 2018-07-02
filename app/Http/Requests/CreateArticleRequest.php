<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticleRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//a发布的文章不能由b编辑，现在无用户系统，故为true
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()//规则,更多规则如email,min:3 的定义见https://laravel.com/docs/5.1/validation
    {
        return [
            //
            'title'=>'required|min:3',// 多个规则用竖线隔开
            'content'=>'required',
            'publish_at'=>'required'
        ];

        //第12讲
//        $rules=[
//            'title'=>'required|min:3',// 多个规则用竖线隔开
//            'content'=>'required',
//            'publish_at'=>'required'
//        ];
//        if(something_happen){
//            $rules['something in attributes-key']='someRules';
//    }
//    return $rules;
    }
}
