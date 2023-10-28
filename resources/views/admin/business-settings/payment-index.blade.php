<x-app-layout>

    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <div class="je jd jc ii">
            <!-- Left: Title -->
            <div class="ri _y">
                <h1 class="gu teu text-slate-800 font-bold">Payment Methods✨</h1>
            </div>
        </div>

        <div class="grid gap-4 grid-cols-2">

            <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv cv1va c4osb cetne">
                <div class="flex flex-col chmlm crszu">
                <form
                    action="{{ route('admin.payment-method-update',['paypal']) }}"
                    method="post"
                >
                    @csrf
                    <!-- Card top -->
                    <div class="border-b p-3 border-slate-200 dark:border-slate-700"> 
                        <div class="flex justify-between">
                            <span class="text-base font-semibold uppercase">Paypal</span>
                            <div>switch</div>
                        </div>
                    </div>
                    <div class="p-3 ckut6 ctk06">
                        
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/admin/payment/paypal.png') }}" alt="public">
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Access Token*</label>
                                <input 
                                    id="title" 
                                    name="paypal_client_id"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Access Token*"
                                >
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Public Key*</label>
                                <input 
                                    id="title"
                                    name="paypal_secret"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Public Key*"
                                >
                            </div>
                        </div>
                       
                    </div>
                    <!-- Card footer -->
                    <div class="p-3 border-t border-slate-200 dark:border-slate-700 c87xd">
                        <div class="flex ak">
                            <div class="flex ls">
                                <button type="submit" class="btn ho xi ye ml-3" >Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv cv1va c4osb cetne">
                <div class="flex flex-col chmlm crszu">
                <form
                    action="{{ route('admin.payment-method-update',['stripe']) }}"
                    method="post"
                >
                    @csrf
                    <!-- Card top -->
                    <div class="border-b p-3 border-slate-200 dark:border-slate-700"> 
                        <div class="flex justify-between">
                            <span class="text-base font-semibold uppercase">Stripe</span>
                            
                        </div>
                    </div>
                    <div class="p-3 ckut6 ctk06">
                        
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/admin/payment/stripe.png') }}" alt="public">
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt capitalize" for="name">publish key*</label>
                                <input 
                                    id="title" 
                                    name="published_key"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Publish Key*"
                                >
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Api Key*</label>
                                <input 
                                    id="title"
                                    name="api_key"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Api Key*"
                                >
                            </div>
                        </div>
                       
                       
                    </div>
                    <!-- Card footer -->
                    <div class="p-3 border-t border-slate-200 dark:border-slate-700 c87xd">
                        <div class="flex ak">
                            <div class="flex ls">
                                <button type="submit" class="btn ho xi ye ml-3" >Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv cv1va c4osb cetne">
                <div class="flex flex-col chmlm crszu">
                <form
                    action="{{ route('admin.payment-method-update',['razor_pay']) }}"
                    method="post"
                >
                    @csrf
                    <!-- Card top -->
                    <div class="border-b p-3 border-slate-200 dark:border-slate-700"> 
                        <div class="flex justify-between">
                            <span class="text-base font-semibold uppercase">razorpay</span>
                            
                        </div>
                    </div>
                    <div class="p-3 ckut6 ctk06">
                        
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/admin/payment/razorpay.png') }}" alt="public">
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Razor Key*</label>
                                <input 
                                    id="title" 
                                    name="razor_key"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Razor Key*"
                                >
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Razor Secret*</label>
                                <input 
                                    id="title"
                                    name="razor_secret"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Razor Secret*"
                                >
                            </div>
                        </div>
                       
                       
                    </div>
                    <!-- Card footer -->
                    <div class="p-3 border-t border-slate-200 dark:border-slate-700 c87xd">
                        <div class="flex ak">
                            <div class="flex ls">
                                <button type="submit" class="btn ho xi ye ml-3" >Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

            <div class="bg-white dark:bg-slate-800 rounded-sm border border-slate-200 dark:border-slate-700 cugyv cv1va c4osb cetne">
                <div class="flex flex-col chmlm crszu">
                <form
                    action="{{ route('admin.payment-method-update',['flutterwave']) }}"
                    method="post"
                >
                    @csrf
                    <!-- Card top -->
                    <div class="border-b p-3 border-slate-200 dark:border-slate-700"> 
                        <div class="flex justify-between">
                            <span class="text-base font-semibold uppercase">FlutterWave</span>
                            
                        </div>
                    </div>
                    <div class="p-3 ckut6 ctk06">
                        
                        <div class="flex justify-center">
                            <img src="{{ asset('assets/admin/payment/flutterwave.png') }}" alt="public">
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt capitalize" for="name">public key*</label>
                                <input 
                                    id="title" 
                                    name="public_key"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="public key*"
                                >
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Secret Key*</label>
                                <input 
                                    id="title"
                                    name="secret_key"
                                    value="" 
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Secret Key*"
                                >
                            </div>
                        </div>
                        <div class="je jc fg jm jb rw">
                            <div class="jr2 w-full">
                                <label class="block text-sm gp rt" for="name">Hash</label>
                                <input 
                                    id="title" 
                                    name="hash"
                                    class="s ou" 
                                    type="text" 
                                    placeholder="Hash" 
                                    value=""
                                >
                            </div>
                        </div>
                       
                    </div>
                    <!-- Card footer -->
                    <div class="p-3 border-t border-slate-200 dark:border-slate-700 c87xd">
                        <div class="flex ak">
                            <div class="flex ls">
                                <button type="submit" class="btn ho xi ye ml-3" >Save</button>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>

           
        </div>

    </div>

</x-app-layout>

@push('styles')
<style>
    @media (min-width: 640px) {
        .cugyv {
            grid-column: span 6/span 6;
        }
    }

    .cetne {
        --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.08), 0 4px 6px -2px rgba(0, 0, 0, 0.01);
        --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .chmlm {
        flex-direction: column;
    }

    .crszu {
        height: 100%;
    }

    .ctk06 {
        padding: 1.25rem;
    }

    .ckut6 {
        flex-grow: 1;
    }

    .c4ijw {
        position: relative;
    }

    .c7j98 {
        margin-bottom: 0.5rem;
    }

    .cob4g {
        text-align: center;
    }

    .cob4g {
        text-align: center;
    }

    .crgeu {
        margin-top: 0.5rem;
    }

    .c87xd {
        border-top-width: 1px;
    }

    

    
</style>
@endpush