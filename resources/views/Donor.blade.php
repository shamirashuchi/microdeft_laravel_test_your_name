<div class="bg-primary-subtle">
    <Form action="{{route('createdonor')}}" method="Post">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder=" "  name="name" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder=" " name="status" aria-label="Recipient's username" aria-describedby="basic-addon2">
        </div>
        <BUTTON>Create</BUTTON>
    </Form>
</div>
