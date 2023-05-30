<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="card">
                        <section class="product">
                            <div class="product__photo">
                                <div class="photo-container">
                                    <div class="photo-main">
                                        <div class="controls">
                                            <i class="material-icons">share</i>
                                            <i class="material-icons">favorite_border</i>
                                        </div>
                                        <img src="https://w7.pngwing.com/pngs/141/709/png-transparent-milkshake-dietary-supplement-whey-protein-isolate-bodybuilding-supplement-protein-powder-whey-peanut-butter-dietary-supplement.png" alt="green apple slice">
                                    </div>                                
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="title">
                                    <h1>WHEY+</h1>
                                    <span>COD: 45999</span>
                                </div>
                                <div class="price">
                                    RS <span>5000</span>
                                </div>
                               
                                <div class="description">
                                    <h3>BENEFITS</h3>
                                    <ul>
                                        <li>Apples are nutricious</li>
                                        <li>Apples may be good for weight loss</li>
                                        <li>Apples may be good for bone health</li>
                                        <li>They're linked to a lowest risk of diabetes</li>
                                    </ul>
                                </div>
                                <button class="buy--btn">ADD TO CART</button>
                            </div>
                        </section>    








                        <section class="product">
                            <div class="product__photo">
                                <div class="photo-container">
                                    <div class="photo-main">
                                        <div class="controls">
                                            <i class="material-icons">share</i>
                                            <i class="material-icons">favorite_border</i>
                                        </div>
                                        <img src="https://res.cloudinary.com/john-mantas/image/upload/v1537291846/codepen/delicious-apples/green-apple-with-slice.png" alt="green apple slice">
                                    </div>                                
                                </div>
                            </div>
                            <div class="product__info">
                                <div class="title">
                                    <h1>Delicious Apples</h1>
                                    <span>COD: 45999</span>
                                </div>
                                <div class="price">
                                    R$ <span>7.93</span>
                                </div>
                               
                                <div class="description">
                                    <h3>BENEFITS</h3>
                                    <ul>
                                        <li>Apples are nutricious</li>
                                        <li>Apples may be good for weight loss</li>
                                        <li>Apples may be good for bone health</li>
                                        <li>They're linked to a lowest risk of diabetes</li>
                                    </ul>
                                </div>
                                <button class="buy--btn">ADD TO CART</button>
                            </div>
                        </section>    
                    </div>

                                 
                   


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
