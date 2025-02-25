<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateConditionRequest;
use App\Http\Requests\UpdateConditionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ConditionRepository;
use Illuminate\Http\Request;
use Flash;

class ConditionController extends AppBaseController
{
    /** @var ConditionRepository $conditionRepository*/
    private $conditionRepository;

    public function __construct(ConditionRepository $conditionRepo)
    {
        $this->conditionRepository = $conditionRepo;
    }

    /**
     * Display a listing of the Condition.
     */
    public function index(Request $request)
    {
        $conditions = $this->conditionRepository->paginate(10);

        return view('conditions.index')
            ->with('conditions', $conditions);
    }

    /**
     * Show the form for creating a new Condition.
     */
    public function create()
    {
        return view('conditions.create');
    }

    /**
     * Store a newly created Condition in storage.
     */
    public function store(CreateConditionRequest $request)
    {
        $input = $request->all();

        $condition = $this->conditionRepository->create($input);

        Flash::success('Condition saved successfully.');

        return redirect(route('conditions.index'));
    }

    /**
     * Display the specified Condition.
     */
    public function show($id)
    {
        $condition = $this->conditionRepository->find($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        return view('conditions.show')->with('condition', $condition);
    }

    /**
     * Show the form for editing the specified Condition.
     */
    public function edit($id)
    {
        $condition = $this->conditionRepository->find($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        return view('conditions.edit')->with('condition', $condition);
    }

    /**
     * Update the specified Condition in storage.
     */
    public function update($id, UpdateConditionRequest $request)
    {
        $condition = $this->conditionRepository->find($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        $condition = $this->conditionRepository->update($request->all(), $id);

        Flash::success('Condition updated successfully.');

        return redirect(route('conditions.index'));
    }

    /**
     * Remove the specified Condition from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $condition = $this->conditionRepository->find($id);

        if (empty($condition)) {
            Flash::error('Condition not found');

            return redirect(route('conditions.index'));
        }

        $this->conditionRepository->delete($id);

        Flash::success('Condition deleted successfully.');

        return redirect(route('conditions.index'));
    }
}
