<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="http://internet-shop.tmweb.ru/storage/products/iphone_x_silver.jpg" alt="iPhone X 256GB">
        <div class="caption">
            <h3>iPhone X 256GB</h3>
            <p>89990 руб.</p>
            <p>
                <a href="{{route('basket')}}" class="btn btn-primary" role="button">В корзину</a>
                @isset($category)
                    {{$category->name}}
                @endisset
                <a href="{{route('product')}}" class="btn btn-default"
                   role="button">Подробнее</a>
            </p>
        </div>
    </div>
</div>
