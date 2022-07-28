<x-layouts.main>
    <h1>Hello</h1>
    <x-alert>
        Well done!
    </x-alert>
    <x-alert type="danger">
        Error!
    </x-alert>
    <hr />
    <x-form method="POST" action="/login">
        <x-form-row>
            <x-from-input name="userEmail" type="email" title="Your Email" placeHolder="Enter your Email"></x-from-input>
            <x-from-input name="password" type="password" title="Your Password"></x-from-input>
        </x-form-row>
        <x-form-row>
            <x-form-textarea name="remarks" title="Register remarks"></x-form-textarea>
        </x-form-row>
        <x-button type="submit">Sign in</x-button>
        <x-button look="info" data-bs-toggle="modal" data-bs-target="#register">Register [MODAL]</x-button>
    </x-form>
    <x-modal size="md" id="register" title="Register">
        <x-form method="POST" action="/register">
            <x-form-row>
                <x-from-input name="userEmailRegister" type="email" title="Your Email" placeHolder="Enter your Email"></x-from-input>
                <x-from-input name="passwordRegister" type="password" title="Your Password"></x-from-input>
            </x-form-row>
            <x-form-row>
                <x-from-input name="password_repeat" type="password" title="Password Repeat" placeHolder="Please repeat your password"></x-from-input>
            </x-form-row>
            <x-button type="submit">Register</x-button>
        </x-form>
    </x-modal>
    <x-slot:components>
        <x-summernote textId="remarks"></x-summernote>
    </x-slot>
</x-layouts.main>
