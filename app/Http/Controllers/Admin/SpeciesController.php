<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SpeciesMaster;

class SpeciesController extends Controller
{

    public $viewPath = 'admin.species';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $data['keyword']='';
       if($request->has('keyword')){
         $data['keyword']=$request->keyword;

         $data['species']=SpeciesMaster::where(function($qry) use ($data){
            $qry->where('common_name','LIKE','%'.$data['keyword'].'%');
            $qry->orWhere('scientific_name','LIKE','%'.$data['keyword'].'%');

         })->orderBy('id','DESC')->paginate(6);

       }else{
        $data['species']=SpeciesMaster::orderBy('id','DESC')->paginate(6);
       }

       return view($this->viewPath.'.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewPath.'.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
         'common_name' => 'required|max:255|unique:species_masters',
         'scientific_name' =>'required|max:255|unique:species_masters'      
        ]);

       extract($request->all());
       
        $create=SpeciesMaster::create([
            'common_name'=>$common_name,
            'scientific_name'=>$scientific_name
             ]);

        return redirect()->route('species.index')->with('success','Species successfully added.');

    }

 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $species=SpeciesMaster::findOrFail($id);
        $data['species']=$species;
        return view($this->viewPath.'.edit',$data);
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
         'common_name' => 'required|max:255|unique:species_masters,common_name,'.$id,
         'scientific_name' =>'required|max:255|unique:species_masters,scientific_name,'.$id      
        ]);

        $species=SpeciesMaster::findOrFail($id);

        $species->update($request->all());
        return redirect()->route('species.index')->with('success','Species successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $species=SpeciesMaster::findOrFail($id);
        $species->delete();
        return redirect()->route('species.index')->with('success','Species successfully deleted.');
    }
}
