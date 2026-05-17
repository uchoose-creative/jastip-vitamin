<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>
        Edit Product
    </title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
          rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
          href="{{ asset('css/admin-products.css') }}">

</head>

<body>

<div class="edit-page">

    <div class="edit-wrapper">

        <!-- LEFT -->
        <div class="edit-image-section">

            <img src="{{ asset('products/' . $product->image) }}">

            <h2>
                {{ $product->name }}
            </h2>

            <p>
                Current Product Preview
            </p>

        </div>

        <!-- RIGHT -->
        <div class="edit-form-section">

            <div class="edit-top">

                <div>

                    <h1>
                        Edit Product
                    </h1>

                    <p>
                        Update your vitamin product easily.
                    </p>

                </div>

                <a href="/admin/products"
                   class="back-btn">

                    Back

                </a>

            </div>

            <form action="{{ url('/admin/products/update/' . $product->id) }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                <!-- PRODUCT NAME -->
                <div class="input-group">

                    <label>
                        Product Name
                    </label>

                    <input type="text"
                           name="name"
                           value="{{ $product->name }}"
                           required>

                </div>

                <!-- DESCRIPTION -->
                <div class="input-group">

                    <label>
                        Description
                    </label>

                    <textarea name="description"
                              required>{{ $product->description }}</textarea>

                </div>

                <!-- PRICE & STOCK -->
                <div class="double-input">

                    <div class="input-group">

                        <label>
                            Price
                        </label>

                        <input type="number"
                               name="price"
                               value="{{ $product->price }}"
                               required>

                    </div>

                    <div class="input-group">

                        <label>
                            Stock
                        </label>

                        <input type="number"
                               name="stock"
                               value="{{ $product->stock }}"
                               required>

                    </div>

                </div>

                <!-- STATUS -->
                <div class="input-group">

                    <label>
                        Product Status
                    </label>

                    <select name="status">

                        <option value="in_stock"
                            {{ $product->status == 'in_stock' ? 'selected' : '' }}>

                            In Stock

                        </option>

                        <option value="pre_order"
                            {{ $product->status == 'pre_order' ? 'selected' : '' }}>

                            Pre Order

                        </option>

                        <option value="out_stock"
                            {{ $product->status == 'out_stock' ? 'selected' : '' }}>

                            Out of Stock

                        </option>

                    </select>

                </div>

                <!-- IMAGE -->
                <div class="input-group">

                    <label>
                        Change Product Image
                    </label>

                    <input type="file"
                           name="image">

                </div>

                <!-- BUTTON -->
                <button type="submit"
                        class="update-btn">

                    Update Product

                </button>

            </form>

        </div>

    </div>

</div>

</body>
</html>