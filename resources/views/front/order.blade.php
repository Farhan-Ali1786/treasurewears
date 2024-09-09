




@if (session()->has('msg'))
<div class="alert alert-{{ session()->get('status') }}">{{ session()->get('msg') }}</div>
@endif
@if ($errors->any())
<div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
 </ul>
</div>
@endif


<form action="{{route('place.order')}}" method="POST"  enctype="multipart/form-data">
    @csrf
        <div class="row">
          <div class="col">
            <label for="">Frist Name</label>
            <input type="text" class="form-control " name="name"  placeholder="First name">
          </div>
          <div class="col">
            <label for="">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Last name">
          </div>
        </div>
        <div class="row py-3">
            <div class="col">
                <label for="">Phone</label>
              <input type="number" class="form-control" name="phone" placeholder="Enter Phone">
            </div>
            <div class="col">
                <label for="">CNIC</label>
              <input type="number" class="form-control" name="cnic" placeholder="Enter CINC">
            </div>
        </div>
            <div class="row py-3">
            <div class="col">
                <label for="">WhatsApp Number</label>
              <input type="number" class="form-control" name="whatsapp_number" placeholder="WhatsApp Number">
            </div>
            <div class="col">
                <label for="">Add Product Card Image</label>
              <input type="file" class="form-control" name="image" placeholder="WhatsApp Number">
            </div>
        </div>
            <div class="col">
                <label for="">Address</label>
                <textarea  id="" cols="30" class="form-control" name="address" rows="10"></textarea>
            {{-- <input type="text" class="form-control" placeholder="Last name"> --}}
            </div>

            {{-- <div class="buynow_bt"><a href="#" type="submit">Buy Now</a></div> --}}
            <button type="submit" class="form-control"> submit</button>
    </form>
    