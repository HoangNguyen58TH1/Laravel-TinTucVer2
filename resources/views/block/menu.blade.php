<div class="col-md-2 ">

    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Danh Sách Loại Tin
        </li>
        @foreach($data['loaitin'] as $subcate)
            <li class="list-group-item">
                <a href="loai-tin/{{ $subcate->TenKhongDau }}">{{ $subcate->Ten }}</a>
            </li>
        @endforeach
    </ul>
</div>
