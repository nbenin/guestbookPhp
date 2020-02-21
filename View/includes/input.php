<div class="form-group row">

    <label for="title" class="col-sm-1 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="title" name="title">
    </div>

</div>

<div class="form-group row">

    <label for="name" class="col-sm-1 col-form-label">Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <label for="day" class="col-sm-1 col-form-label">Date</label>
    <div class="btn-group col-sm-1 dropdown">
        <select class="form-control" id="day" name="day">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

    <div class="btn-group col-sm-2 dropdown">
        <select class="form-control" id="month" name="month">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

    <div class="btn-group col-sm-2 dropdown">
        <select class="form-control" id="year" name="year">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
        </select>
    </div>

</div>

<div class="form-group">
    <label for="textArea">Text Area</label>
    <textarea class="form-control" id="textArea" name="textArea" rows="3"></textarea>
</div>

<button type="submit">Submit Post!</button>