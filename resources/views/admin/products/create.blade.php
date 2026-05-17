<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Product</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet"
        href="{{ asset('css/admin-products.css') }}">

</head>

<body>

    <div class="form-container">

        <div class="form-box">

            <h1>
                Add Product
            </h1>

            <p>
                Create a new vitamin product.
            </p>

            <form action="{{ url('/admin/products/store') }}"
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
                        required>

                </div>

                <!-- DESCRIPTION -->
                <div class="input-group">

                    <label>
                        Description
                    </label>

                    <textarea name="description"
                        required></textarea>

                </div>

                <!-- PRICE -->
                <div class="input-group">

                    <label>
                        Price
                    </label>

                    <div class="price-box">

                        <span>
                            Rp
                        </span>

                        <input type="number"
                            name="price"
                            required>

                    </div>

                </div>

                <!-- IMAGE -->
                <div class="input-group">

                    <label>
                        Product Image
                    </label>

                    <input type="file"
                        name="image"
                        required>

                </div>

                <!-- STOCK -->
                <div class="input-group">

                    <label>
                        Stock
                    </label>

                    <input type="number"
                        name="stock"
                        required>

                </div>

                <!-- STATUS -->
                <div class="input-group">

                    <label>
                        Product Status
                    </label>

                    <select name="status">

                        <option value="in_stock">
                            In Stock
                        </option>

                        <option value="pre_order">
                            Pre Order
                        </option>

                        <option value="out_stock">
                            Out of Stock
                        </option>

                    </select>

                </div>

                <!-- BUTTON -->
                <div class="form-buttons">

                    <a href="/admin/products"
                        class="back-btn">

                        Back

                    </a>

                    <button type="submit"
                        class="save-btn">

                        Save Product

                    </button>

                </div>

            </form>

        </div>

    </div>

</body>

</html>