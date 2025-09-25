<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wattup - Sepeda Listrik</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        wattup: '#42b549',
                        wattupDark: '#3aa142'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <!-- Top Header -->
        <div class="border-b border-gray-200">
            <div class="container mx-auto px-4 py-2 flex items-center justify-between">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-wattup font-bold text-2xl">Wattup</a>
                </div>

                <!-- Search Bar -->
                <div class="hidden md:flex flex-1 mx-4 max-w-2xl">
                    <div class="relative w-full">
                        <input type="text" placeholder="Cari di Wattup" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wattup">
                        <button class="absolute right-0 top-0 h-full bg-wattup text-white px-4 rounded-r-md">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex items-center space-x-4">
                    <a href="#" class="hidden md:block text-gray-700 hover:text-wattup">
                        <i class="fas fa-shopping-cart mr-1"></i>
                        Keranjang
                    </a>
                    <a href="/login" class="bg-wattup hover:bg-wattupDark text-white py-2 px-4 rounded-md">
                        Masuk
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Header -->
        <div class="container mx-auto px-4 py-2 hidden md:flex items-center justify-between">
            <!-- Categories -->
            <div class="flex items-center space-x-6">
                <a href="#" class="text-gray-700 hover:text-wattup font-medium">Semua Kategori</a>
                <a href="#" class="text-gray-700 hover:text-wattup font-medium">Sepeda Listrik</a>
                <a href="#" class="text-gray-700 hover:text-wattup font-medium">Baterai & Charger</a>
                <a href="#" class="text-gray-700 hover:text-wattup font-medium">Spare Part</a>
                <a href="#" class="text-gray-700 hover:text-wattup font-medium">Aksesoris</a>
            </div>

            <!-- Location -->
            <div class="flex items-center text-gray-700">
                <i class="fas fa-map-marker-alt mr-2 text-wattup"></i>
                <span>Dikirim dari <b>Banjarmasin</b></span>
            </div>
        </div>

        <!-- Mobile Search -->
        <div class="md:hidden p-3 border-t border-gray-200">
            <div class="relative">
                <input type="text" placeholder="Cari di Wattup" class="w-full py-2 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-wattup">
                <button class="absolute right-0 top-0 h-full bg-wattup text-white px-4 rounded-r-md">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="container mx-auto px-4 py-4">
        <div class="rounded-lg overflow-hidden shadow-md">
            <img src="asset/HeroContent.png" alt="Hero Banner" class="w-full h-auto">
        </div>
    </section>

    <!-- Categories Section -->
    <section class="container mx-auto px-4 py-6">
        <h2 class="text-xl font-bold mb-4">Kategori</h2>
        <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-10 gap-4">
            <!-- Category Item -->
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/1.png" alt="Sepeda Listrik" class="mx-auto">
                </div>
                <span class="text-xs">Sepeda Listrik</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/2.png" alt="Baterai" class="mx-auto">
                </div>
                <span class="text-xs">Baterai</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/3.png" alt="Charger" class="mx-auto">
                </div>
                <span class="text-xs">Charger</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/4.png" alt="Spare Part" class="mx-auto">
                </div>
                <span class="text-xs">Spare Part</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/5.png" alt="Aksesoris" class="mx-auto">
                </div>
                <span class="text-xs">Aksesoris</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/6.png" alt="Lampu LED" class="mx-auto">
                </div>
                <span class="text-xs">Lampu LED</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/7.png" alt="Rem" class="mx-auto">
                </div>
                <span class="text-xs">Rem</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/8.png" alt="Oli" class="mx-auto">
                </div>
                <span class="text-xs">Oli & Pelumas</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/9.png" alt="Tools" class="mx-auto">
                </div>
                <span class="text-xs">Peralatan Bengkel</span>
            </div>
            
            <div class="text-center">
                <div class="bg-white rounded-lg shadow p-3 mb-1">
                    <img src="asset/10.png" alt="Lainnya" class="mx-auto">
                </div>
                <span class="text-xs">Lainnya</span>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="container mx-auto px-4 py-6">
        <h2 class="text-xl font-bold mb-4">Produk Paling Dicari</h2>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            <!-- Product Card -->

            @foreach ($products as $product)
            <div class="bg-white rounded-lg shadow overflow-hidden">
                <a href="/checkout"><img src="{{ asset('uploads/product/' . $product->product_image) }}" alt="Sepeda Listrik" class="w-full"></a>
                <div class="p-3">
                    <h3 class="text-sm font-medium mb-2 line-clamp-2">{{$product->product_name}}</h3>
                    <p class="text-wattup font-bold">Rp {{ number_format($product->product_price, 0, ',' ,'.')}}</p>
                    <div class="flex items-center mt-1">
                        <div class="flex text-yellow-400">
                            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                        </div>
                        <span class="text-xs text-gray-500 ml-1">(1,234)</span>
                    </div>
                    <p class="text-xs text-gray-500 mt-1">{{$product->product_location}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-gray-200 mt-8">
        <div class="container mx-auto px-4 py-8">
            <!-- Top Footer -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Tentang Wattup -->
                <div>
                    <h3 class="font-bold mb-4">Tentang Wattup</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Tentang Kami</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Karir</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Blog</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Komunitas</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Mitra Bengkel</a></li>
                    </ul>
                </div>
                
                <!-- Layanan -->
                <div>
                    <h3 class="font-bold mb-4">Layanan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Wattup Care</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Syarat dan Ketentuan</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Bengkel Panggilan</a></li>
                    </ul>
                </div>
                
                <!-- Pembeli -->
                <div>
                    <h3 class="font-bold mb-4">Pembeli</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Cara Berbelanja</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Pembayaran</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Pengembalian</a></li>
                        <li><a href="#" class="text-gray-600 hover:text-wattup">Diskon</a></li>
                    </ul>
                </div>
                
                <!-- Follow Kami -->
                <div>
                    <h3 class="font-bold mb-4">Follow Kami</h3>
                    <div class="flex space-x-4 mb-4">
                        <a href="#" class="text-gray-600 hover:text-wattup"><i class="fab fa-facebook fa-lg"></i></a>
                        <a href="#" class="text-gray-600 hover:text-wattup"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="#" class="text-gray-600 hover:text-wattup"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="#" class="text-gray-600 hover:text-wattup"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                    <h3 class="font-bold mb-4">Download Aplikasi</h3>
                    <div class="flex space-x-2">
                        <a href="#"><img src="asset/Logo_Appstore.png" alt="App Store" class="h-10"></a>
                        <a href="#"><img src="asset/Logo_Playstore.png" alt="Google Play" class="h-10"></a>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Footer -->
            <div class="border-t border-gray-200 pt-6 flex flex-col md:flex-row center items-center">
                <p class="text-gray-600 mb-4 md:mb-0">&copy; 2025 Wattup. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile Bottom Nav -->
    <div class="md:hidden fixed bottom-0 left-0 right-0 bg-white border-t border-gray-200 flex justify-around py-2">
        <a href="#" class="flex flex-col items-center text-wattup">
            <i class="fas fa-home"></i>
            <span class="text-xs">Home</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-600">
            <i class="far fa-heart"></i>
            <span class="text-xs">Favorit</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-600">
            <i class="far fa-user"></i>
            <span class="text-xs">Akun</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-600">
            <i class="fas fa-shopping-cart"></i>
            <span class="text-xs">Keranjang</span>
        </a>
        <a href="#" class="flex flex-col items-center text-gray-600">
            <i class="fas fa-ellipsis-h"></i>
            <span class="text-xs">Lainnya</span>
        </a>
    </div>
</body>
</html>
