<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Products</title>

    <!-- FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- ICON -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/admin-products.css') }}">

</head>

<body>

    <div class="container">

        <div class="topbar">

    <div>

        <h1>
            Product Management
        </h1>

        <p>
            Manage your vitamin products easily.
        </p>

    </div>

    <div class="topbar-buttons">

        <a href="/admin/dashboard"
           class="back-btn">

            Back

        </a>

        <a href="/admin/products/create"
           class="add-btn">

            + Add Product

        </a>

    </div>

</div>

        <div class="table-box">

            <table>

                <thead>

                    <tr>

                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($products as $product)

                        <tr>

                            <td>

                               <img src="{{ asset('products/' . $product->image) }}"

                            </td>

                            <td>
                                {{ $product->name }}
                            </td>

                            <td>
                                Rp{{ number_format($product->price, 0, ',', '.') }}
                            </td>

                            <td>
                                {{ $product->stock }}
                            </td>

                            <td>

                                <a href="{{ url('/admin/products/edit/' . $product->id) }}"
                                    class="edit-btn">

                                        Edit

                                    </a>

                                    <form action="{{ url('/admin/products/delete/' . $product->id) }}"
                                        method="POST"
                                        style="display:inline-block;">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="delete-btn">

                                            Delete

                                        </button>

</form>

                            </td>

                        </tr>

                    @empty

                        <tr>

                            <td colspan="5" class="empty-text">
                                No products yet.
                            </td>

                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</body>

</html>