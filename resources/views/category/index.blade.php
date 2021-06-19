

    <ul class="nav nav-tabs">
    @foreach($category as $cat)
        @php
            $hasSubCategory = (count($cat->subCategory)>0);

        @endphp


        <!--Parent Nav Item-->
            @if($cat->parent_id == 0 && !$hasSubCategory)
                <li class="nav-item">
                    <a class="nav-link active" href="#">{{$cat->name}}</a>
                </li>
            @endif
        <!--Parent Nav Item-->

            <!--Sub Nav Items-->
            @if($hasSubCategory)

                <li class="nav-item dropdown">
                    <a class="nav-link {{($hasSubCategory) ? "dropdown-toggle" : ""}}"
                       {{($hasSubCategory) ? "data-toggle=dropdown" : ""}} href="#">{{$cat->name}}</a>

                    <div class="dropdown-menu">
                        @foreach($cat->subCategory as $subCat)

                            <a class="dropdown-item" href="#">{{$subCat->name}}</a>

                        @endforeach
                    </div>
                </li>
            @endif
        <!--Sub Nav Items-->
        @endforeach
    </ul>


