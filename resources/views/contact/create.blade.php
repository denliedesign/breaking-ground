<form action="{{ route('contact.store') }}" method="POST">
    <div class="mb-3">
        <input type="hidden" name="my_name" id="my_name" value="">
        <input type="checkbox" name="contact_me_by_fax_only" id="contact_me_by_fax_only" value="1" tabindex="-1" autocomplete="off" class="d-none">
        <label for="name" class="form-label">Name</label>
        <input type="name" class="form-control" id="name" name="name">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea name="message" class="form-control" id="message" rows="3"></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6LdiLAUqAAAAACGcbv1vLq7_CiRell74yTyToD97" data-action="LOGIN"></div>
{{--    {!! NoCaptcha::renderJs() !!}--}}
{{--    {!! NoCaptcha::display() !!}--}}
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
