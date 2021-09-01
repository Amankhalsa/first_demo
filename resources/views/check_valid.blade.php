

    <form method="post" action="valid_chk">
    @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name">
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email">
        </div>

        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number">
        </div>

        <div class="form-group">
            <label for="desc">Tell me about what you want to contact me for...</label>
            <textarea class="form-control" id="desc" rows="3" name="desc"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>

