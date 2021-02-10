<div class="col-lg-3 pt-3">

    <form class="pr-xl-3">

        <div class="mb-4">
            <label for="form_search" class="form-label">
                @lang('food::txt.search.keyword')
            </label>
            <div class="input-label-absolute input-label-absolute-right">
                <div class="label-absolute"><i class="fa fa-search"></i></div>
                <input type="text" name="q" placeholder="@lang('food::txt.search.keyword')" class="form-control pr-4">
            </div>

        </div>

        <button type="submit" class="btn btn-primary"> <i class="fas fa-filter mr-1"></i>
            @lang('food::txt.search.filter')
        </button>


    </form>

</div>
