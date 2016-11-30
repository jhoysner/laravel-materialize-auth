@extends('layouts.app')

@section('content')
    
    <div class="row" ng-app="explorer" ng-controller="expController">

    	      <!-- Category section -->
        <div class="col s3">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Categoria</span>
                <ul class="collapsible" data-collapsible="accordion">
                  <li ng-repeat='category in categoryList' ng-click='loadSubCategory(category.id)'>
                    <div class="collapsible-header"><i class="material-icons">place</i>
                      @{{category.name}}
                    </div>
                    <div class="collapsible-body">
                        <ul class="section table-of-contents">
                          <li ng-repeat='sub in subCategoryList[category.id]'>
                          <?php # /explore/{cattittle}/{subcattittle}/{category_id}/{subcategory_id} ?>
                          <a href="{{url('explore')}}/@{{category.name.replace(' ','-')|lowercase}}/@{{sub.name.replace(' ','-')|lowercase}}/@{{sub.category_id}}/@{{sub.id}}" class="active">@{{sub.name}}</a></li>
                        </ul>
                    </div>
                  </li>s
                </ul>
            </div>
          </div>
        </div>

        <div class="col s9">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Publicaciones</span>
                ...
            </div>
          </div>
        </div>




    </div>

<script src="{{ url('/js/explorer.js') }}"></script>

@endsection
