<div class="container mt-5">
    <form method="POST" action="/addcontact">
        @csrf
        <div class="form-group mb-2">
            <label for="exampleInputEmail">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPassword1">Phone Number</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        <div class="form-group mb-2">
            <label for="exampleInputPAssword1">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>