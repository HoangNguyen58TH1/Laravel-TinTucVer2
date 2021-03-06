@section('title')
    Trang Chủ
@endsection

@extends('index')

@section('content')
<!-- Page Content -->
    <div class="container">

        @include('block.slide')

        <div class="space20"></div>


        <div class="row main-left">
            @include('block.menu')

            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Breaking News</h2>
                    </div>

                    <div class="panel-body">
                        @foreach($data['loaitin'] as $loaitin)
                            <!-- item -->
                            <div class="row-item row">
                                <h3>
                                    <a class="cate-list"><strong>{{ $loaitin->Ten }}</strong></a>

                                </h3>
                                <?php
                                    $data = $loaitin->TinTuc->where('NoiBat',1)->sortByDesc('created_at')->take(5);
                                    $chosen_article = $data->shift();
                                ?>
                                <div class="col-md-8 border-right">
                                    <div class="col-md-5">
                                        <a href="tin-tuc/{{ $chosen_article['TieuDeKhongDau'] }}.html">
                                        <?php
                                            $check_img = $chosen_article['Hinh'];
                                            if (preg_match("/https/i", $check_img) == 1){
                                                    echo '<img class="img-responsive" src="'.$check_img.'">';
                                            }
                                            else {
                                                    echo '<img class="img-responsive" src="upload/tintuc/'.$check_img.'">';
                                            }
                                        ?>
                                            <!-- <img class="img-responsive" src="{{ $chosen_article['Hinh'] }}" alt="Hình ảnh đại diện của bài viết"> -->
                                        </a>
                                    </div>

                                    <div class="col-md-7">
                                        <h3><a href="tin-tuc/{{ $chosen_article['TieuDeKhongDau'] }}.html">{{ $chosen_article['TieuDe'] }}</a></h3>
                                        <p>{!! $chosen_article['TomTat'] !!}</p>
                                        <a class="btn btn-primary" href="tin-tuc/{{ $chosen_article['TieuDeKhongDau'] }}.html">Xem Thêm <span class="glyphicon glyphicon-chevron-right"></span></a>
                                    </div>

                                </div>


                                <div class="col-md-4">
                                    @foreach($data->all() as $remaining_article)
                                        <a href="tin-tuc/{{ $remaining_article['TieuDeKhongDau'] }}.html">
                                            <h4>
                                                <span class="glyphicon glyphicon-list-alt"></span>
                                                {{ $remaining_article['TieuDe'] }}
                                            </h4>
                                        </a>
                                    @endforeach
                                </div>

                                <div class="break"></div>
                            </div>
                            <!-- end item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
@endsection