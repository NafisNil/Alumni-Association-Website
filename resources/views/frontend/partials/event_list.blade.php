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
