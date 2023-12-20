<x-app-layout>
    {{-- <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                @foreach ($UserInf as $user)
                    <li id="ListItem">
                        <a href="#" id="user">
                            <img src="{{ asset('/images') }}/{{ $user->images }}" class="userProfile" alt="images">
                            {{ $user->name }}
                            <b><sup id="{{ $user->id }}-status" class="offline-status">Offline</sup></b>

                        </a>
                    </li>
                @endforeach
            </div>
            <div class="col-md-8 d-none" id= "ChatBox">
                <div class="">
                    <div id="chatBorad">
                        <h1> Hello world </h1>
                    </div>
                    <form action="">

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">Send</button>
                            <input type="text" class="form-control" name='message' placeholder="type your mind"
                                aria-label="Example text with button addon" aria-describedby="button-addon1">
                        </div>
                    </form> --}}
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
