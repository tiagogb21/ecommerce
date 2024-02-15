    <?php

    use App\Models\User;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Auth\Events\Registered;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Validation\Rules;
    use Livewire\Attributes\Layout;
    use Livewire\Volt\Component;

    new #[Layout('layouts.guest')] class extends Component {
        public string $name = '';
        public string $email = '';
        public string $password = '';
        public string $password_confirmation = '';
        public array $termsAndConditions = [
            'Acceptance of Terms' => 'By accessing and using E.COM, you agree to comply with and be bound by these Terms and Conditions of Use. If you do not agree to these Terms, please refrain from using the Website.',

            'Changes to Terms' => 'We reserve the right to modify or revise these Terms at any time. Your continued use of the Website following any changes constitutes acceptance of those changes.',

            'Intellectual Property' => 'All content on the Website, including text, graphics, logos, images, and software, is the property of E.COM and is protected by copyright and other intellectual property laws. You may not reproduce, distribute, display, or create derivative works of any content without our prior written consent.',

            'User Conduct' => 'You agree not to engage in any activity that may disrupt or interfere with the proper functioning of the Website. Prohibited activities include but are not limited to hacking, spamming, and unauthorized access to the Website.',

            'User Accounts' => 'Some features of the Website may require you to create a user account. You are responsible for maintaining the confidentiality of your account information and for all activities that occur under your account.',

            'Privacy Policy' => 'Your use of the Website is also governed by our Privacy Policy. By using the Website, you consent to the collection, use, and disclosure of your personal information as described in the Privacy Policy.',

            'Limitation of Liability' => 'To the fullest extent permitted by law, E.COM shall not be liable for any direct, indirect, incidental, consequential, or special damages arising out of or in any way connected with the use of the Website.',

            'Governing Law' => 'These Terms are governed by and construed in accordance with the laws of Brazil. Any disputes arising under or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts in the Brazil.',

            'Contact Information' => 'If you have any questions or concerns about these Terms, please contact us at e.com@mail.com.',
        ];

        /**
         * Handle an incoming registration request.
         */
        public function register(): void
        {
            $validated = $this->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
            ]);

            $validated['password'] = Hash::make($validated['password']);

            event(new Registered(($user = User::create($validated))));

            Auth::login($user);

            $this->redirect(RouteServiceProvider::HOME, navigate: true);
        }
    }; ?>

    <div class="w-full max-w-lg p-6 mx-auto">
        <div class="bg-white border border-gray-200 shadow-sm mt-7 rounded-xl dark:bg-gray-800 dark:border-gray-700">
            <div class="p-4 sm:p-7">
                <div class="text-center">
                    <h1 class="block text-2xl font-bold text-gray-800 dark:text-white">Register</h1>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        Already have an account?
                        <a class="text-sm text-gray-600 underline rounded-md dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                            href="{{ route('login') }}" wire:navigate>
                            {{ __('Login here') }}
                        </a>
                    </p>
                </div>

                <div class="mt-5">
                    <button type="button"
                        class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-gray-800 bg-white border border-gray-200 rounded-lg shadow-sm gap-x-2 hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-slate-900 dark:border-gray-700 dark:text-white dark:hover:bg-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        <svg class="w-4 h-auto" width="46" height="47" viewBox="0 0 46 47" fill="none">
                            <path
                                d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
                                fill="#4285F4" />
                            <path
                                d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
                                fill="#34A853" />
                            <path
                                d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
                                fill="#FBBC05" />
                            <path
                                d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
                                fill="#EB4335" />
                        </svg>
                        Sign up with Google
                    </button>

                    <div
                        class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-[1_1_0%] before:border-t before:border-gray-200 before:me-6 after:flex-[1_1_0%] after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500 dark:before:border-gray-600 dark:after:border-gray-600">
                        Or</div>

                </div>
                <!-- Form -->

                <form wire:submit="register">
                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input wire:model="name" id="name" class="block w-full mt-1" type="text"
                            name="name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input wire:model="email" id="email" class="block w-full mt-1" type="email"
                            name="email" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input wire:model="password" id="password" class="block w-full mt-1" type="password"
                            name="password" required autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-text-input wire:model="password_confirmation" id="password_confirmation"
                            class="block w-full mt-1" type="password" name="password_confirmation" required
                            autocomplete="new-password" />

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="my-5 ms-3">
                        <p class="text-sm dark:text-white">
                            I accept the
                            <span
                                class="font-medium text-blue-600 cursor-pointer decoration-2 hover:underline dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                                data-hs-overlay="#hs-scroll-inside-body-modal">
                                Terms and Conditions
                            </span>
                        </p>
                    </div>

                    <button
                        class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-semibold text-white bg-blue-600 border border-transparent rounded-lg gap-x-2 hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600">
                        {{ __('Register') }}
                    </button>

                </form>
            </div>
        </div>
        <div id="hs-scroll-inside-body-modal"
            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto">
            <div
                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-3.5rem)]">
                <div
                    class="max-h-full overflow-hidden flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-gray-800 dark:border-gray-700 dark:shadow-slate-700/[.7]">
                    <div class="flex items-center justify-between px-4 py-3 border-b dark:border-gray-700">
                        <h3 class="font-bold text-gray-800 dark:text-white">
                            Terms and Conditions
                        </h3>
                        <button type="button"
                            class="flex items-center justify-center text-sm font-semibold text-gray-800 border border-transparent rounded-full size-7 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600"
                            data-hs-overlay="#hs-scroll-inside-body-modal">
                            <span class="sr-only">Close</span>
                            <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18" />
                                <path d="m6 6 12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-4 overflow-y-auto">
                        <div class="space-y-4">
                            <div>
                                @foreach ($termsAndConditions as $terms => $conditions)
                                    <h3 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $terms }}
                                    </h3>
                                    <p class="mt-1 text-gray-800 dark:text-gray-400">
                                        {{ $conditions }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
