<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRefsCategoryRequest;
use App\Http\Requests\UpdateRefsCategoryRequest;
use App\Repositories\RefsCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Cookie;
use App\Models\RefsCategory;
use App\Http\Middleware\Authenticate;
use Auth;
class RefsCategoryController extends AppBaseController
{
    /** @var  RefsCategoryRepository */
    private $refsCategoryRepository;

    public function __construct(RefsCategoryRepository $refsCategoryRepo)
    {
        $this->refsCategoryRepository = $refsCategoryRepo;
    }

    /**
     * Display a listing of the RefsCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $refsCategories = $this->refsCategoryRepository->all();

        return view('refs_categories.index')
            ->with('refsCategories', $refsCategories);
    }

    /**
     * Show the form for creating a new RefsCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('refs_categories.create');
    }

//get the total visitor to a route 
public function refs($site=null,$userName=null,$referalCode=null){
    $details=array($site,$userName,$referalCode);
    // $count=0;
    // foreach($details as $detail){
    //     if($detail==null){
    //        echo "they are null";
    //     }else{
    //         $count=$count+1;
    //     }
    // }
    if(!$userName){
        return redirect(route('index'));
    }
    if($referalCode){
        $refCategory=RefsCategory::where('id',$referalCode)->first();
    }
    if(is_null($refCategory)){
        return redirect(route('index'));
    }else{
        RefsCategory::where('id',$referalCode)->update([
            'referal_visits'=> $refCategory->referal_visits +1,
            'referal_count' => $refCategory->referal_count+1
        ]);
        //return ($refCategory);
    }
    if(Cookie::get('ref_user_id')){
        return redirect('/register');
    }else{
        return redirect('/register')
        ->cookie('site',$site,60*24*30*12)
        ->cookie('ref_user_id',$userName,60*24*30*12)
        ->cookie('ref_category_id',$referalCode,60*24*30*12);
    }
}

    /**
     * Store a newly created RefsCategory in storage.
     *
     * @param CreateRefsCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateRefsCategoryRequest $request)
    {
        $input = $request->all();

        $refsCategory = $this->refsCategoryRepository->create($input);

        Flash::success('Refs Category saved successfully.');

        return redirect(route('refsCategories.index'));
    }

    /**
     * Display the specified RefsCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $refsCategory = $this->refsCategoryRepository->find($id);

        if (empty($refsCategory)) {
            Flash::error('Refs Category not found');

            return redirect(route('refsCategories.index'));
        }

        return view('refs_categories.show')->with('refsCategory', $refsCategory);
    }

    /**
     * Show the form for editing the specified RefsCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $refsCategory = $this->refsCategoryRepository->find($id);

        if (empty($refsCategory)) {
            Flash::error('Refs Category not found');

            return redirect(route('refsCategories.index'));
        }

        return view('refs_categories.edit')->with('refsCategory', $refsCategory);
    }

    /**
     * Update the specified RefsCategory in storage.
     *
     * @param int $id
     * @param UpdateRefsCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRefsCategoryRequest $request)
    {
        $refsCategory = $this->refsCategoryRepository->find($id);

        if (empty($refsCategory)) {
            Flash::error('Refs Category not found');

            return redirect(route('refsCategories.index'));
        }

        $refsCategory = $this->refsCategoryRepository->update($request->all(), $id);

        Flash::success('Refs Category updated successfully.');

        return redirect(route('refsCategories.index'));
    }

    /**
     * Remove the specified RefsCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $refsCategory = $this->refsCategoryRepository->find($id);

        if (empty($refsCategory)) {
            Flash::error('Refs Category not found');

            return redirect(route('refsCategories.index'));
        }

        $this->refsCategoryRepository->delete($id);

        Flash::success('Refs Category deleted successfully.');

        return redirect(route('refsCategories.index'));
    }
}
