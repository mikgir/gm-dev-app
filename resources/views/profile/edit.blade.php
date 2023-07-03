<form method="POST" action="{{route('profile.update', auth()->id())}}" class="form-group contact__form">
    @csrf

    <div class="row gx-3 mb-3">
        <!-- Form Group (first name)-->
        <div class="col-md-6">
            <label class="form-label" for="inputFirstName">First name</label>
            <input name="first_name" class="form-control @error('first_name') border-red-500 @enderror"
                   id="inputFirstName" type="text"  placeholder="First name" value="{{$profile->first_name}}">
            @error('first_name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <!-- Form Group (last name)-->
        <div class="col-md-6">
            <label class="form-label" for="inputLastName">Last name</label>
            <input name="last_name" class="form-control @error('last_name') border-red-500 @enderror" id="inputLastName"
                   type="text" placeholder="Last name" value="{{$profile->last_name}}">
            @error('last_name')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
    </div>
    <!-- Form Row        -->
    <div class="row gx-3 mb-3">
        <!-- Form Group (location)-->
        <div class="col-md-6">
            <label class="form-label" for="city">City</label>
            <input name="city" class="form-control @error('city') border-red-500 @enderror" id="city" type="text"
                   placeholder="city" value="{{$profile->city}}">
            @error('city')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <!-- Form Group (email address)-->
        <div class="col-md-6">
            <label class="form-label" for="country">Country</label>
            <input name="country" class="form-control @error('country') border-red-500 @enderror" id="country" type="text"
                   placeholder="country" value="{{$profile->country}}">
            @error('country')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
    </div>
    <!-- Form Row-->
    <div class="row gx-3 mb-3">
        <div class="col-md-6">
            <label class="form-label" for="inputBirthday">Birthday</label>
            <input class="form-control @error('birthday') border-red-500 @enderror" id="inputBirthday"
                   type="date" name="birthday" value="{{$profile->birthday}}">
            @error('birthday')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
        <!-- Form Group (phone)-->
        <div class="col-md-6">
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control @error('phone') border-red-500 @enderror" id="phone" type="text" name="phone"
                   value="{{$profile->phone}}">
            @error('phone')
            <p class="text-red-500">{{$message}}</p>
            @enderror
        </div>
    </div>
    <!-- Save changes button-->
    <div class="flex items-center gap-4">
        <button class="btn btn-outline-secondary custom__btn clay" type="submit">Save</button>
    </div>

</form>
