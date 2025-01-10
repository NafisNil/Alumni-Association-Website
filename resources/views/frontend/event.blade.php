@extends('frontend.layouts.master')
@section('title')
    Committee Members - BAUET Alumni CSE
@endsection

@section('content')
<style>
.qodef-grid.qodef-layout--template>.qodef-grid-inner>.qodef-grid-item.qodef-col--9  {
    width: 100% !important;
  }
</style>
<div id="qodef-page-outer">
    <div class="qodef-page-title qodef-m qodef-title--standard-with-breadcrumbs qodef-alignment--center qodef-vertical-alignment--header-bottom qodef--has-image">
      <div class="qodef-m-inner">
        <div class="qodef-title-breadcrumbs-holder">
          <div class="qodef-content-grid">
            <div itemprop="breadcrumb" class="qodef-breadcrumbs">
              <a itemprop="url" class="qodef-breadcrumbs-link" href="{{route('index')}}">
                <span itemprop="title">Home</span>
              </a>
              <span class="qodef-breadcrumbs-separator"></span>
              <span itemprop="title" class="qodef-breadcrumbs-current">Event</span>
            </div>
          </div>
        </div>
        <div class="qodef-m-content qodef-content-grid ">
          <h2 class="qodef-m-title entry-title"> Event </h2>
          <p class="qodef-m-subtitle">Experience Something New: Check Our Events</p>
        </div>
      </div>
    </div>
    <div id="qodef-page-inner" class="qodef-content-grid">
      <main id="qodef-page-content" class="qodef-grid qodef-layout--template qodef--no-bottom-space qodef-gutter--normal">
        <div class="qodef-grid-inner clear">
          <div id="qodef-woo-page" class="qodef-grid-item qodef-page-content-section qodef-col--9 qodef--list" >
            <header class="woocommerce-products-header"></header>
            <div class="woocommerce-notices-wrapper"></div>
            <div class="qodef-woo-results">
  
              <form class="woocommerce-ordering" method="get">
                <select name="category" id="categoryFilter" class="orderby" aria-label="Shop order">
                  <option value="All">All Events</option>
                  <option value="Upcoming">Upcoming</option>
                  <option value="On-Going">On-going</option>
                  <option value="Previous">Previous</option>
                </select>
                <input type="hidden" name="paged" value="1" />
              </form>
              
            </div>
            <div class="qodef-woo-product-list qodef-item-layout--info-below">
              <ul class="products columns-3">
                @foreach ($events as $item)
                <li class="new product type-product post-1281 status-publish first instock product_cat-coffee product_tag-mugs has-post-thumbnail shipping-taxable purchasable product-type-simple">
                  <div class="qodef-woo-product-inner">
                    <div class="qodef-woo-product-image">
                      <img width="300" height="300" src="{{(!empty($item->photo))?URL::to('storage/'.$item->photo):URL::to('image/no_image.png')}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="jj" loading="eager" />
                      <span class="qodef-woo-product-mark qodef-new">{{$item->category}}</span>
                    </div>
                    <div class="qodef-woo-product-content">
                      <h5 class="qodef-woo-product-title woocommerce-loop-product__title">{{$item->title}}</h5>
                      <div class="qodef-woo-product-categories">
                        <a href="#" rel="tag"><b>Date : </b>{{$item->date}}</a>
                      </div>
                      <div class="qodef-woo-product-content-bottom">
                        <span class="price">
                          <span class="woocommerce-Price-amount amount">
                            <bdi>
                              <span class="woocommerce-Price-currencySymbol">Time : </span>{{$item->time}} </bdi>
                          </span>
                        </span>
                        <a href="?add-to-cart=1281" data-quantity="1" class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="1281" data-product_sku="001" aria-label="Add &ldquo;Leila Mug&rdquo; to your cart" rel="nofollow">Details</a>
                      </div>
                    </div>
                    <a href="https://joinup.qodeinteractive.com/product/leila-mug/" class="woocommerce-LoopProduct-link woocommerce-loop-product__link"></a>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <nav class="woocommerce-pagination">
              {{$events->links()}}
            </nav>
          </div>
     
        </div>
      </main>
    </div>
    <!-- close #qodef-page-inner div from header.php -->
  </div>
  <script>
    document.getElementById('categoryFilter').addEventListener('change', function () {
      const selectedCategory = this.value;
      console.log(selectedCategory);
      fetch(`/events?category=${selectedCategory}`)
        .then(response => response.text())
        .then(html => {
          document.querySelector('.qodef-woo-product-list ul.products').innerHTML = html;
        });
    });
  </script>
  
@endsection