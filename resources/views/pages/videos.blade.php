@extends('layouts.layout')
@section('content')
    <div class="container mainVideoContainer">
        <div class="row text-center">
            <iframe width="896" height="495" src="https://www.youtube.com/embed/KpkJtkNEGSk?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" id="myVideo" frameborder="5" allowfullscreen></iframe>
        </div>
        <div class="row text-center">
            <div id="myThumbnails"></div>
        </div>
        <!--<div class="row text-center myThumbnailVideo">
            <div class="col-lg-3">
                <iframe width="208" height="117" src="https://www.youtube.com/embed/KpkJtkNEGSk?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/eM5VRZgSKOs?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/Oh3d0wSKDBY?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/mZjzvAvqNR4?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row text-center myThumbnailVideo">
            <div class="col-lg-3">
                <iframe width="208" height="117" src="https://www.youtube.com/embed/vo9kZasoXC4?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/MxHvBMBL3uc?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/FSXwPpdT61c?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/-psicPaFTMA?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row text-center myThumbnailVideo">
            <div class="col-lg-3">
                <iframe width="208" height="117" src="https://www.youtube.com/embed/K5APe7Rd6Xc?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/5WUtIN5fsqE?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/jtL8WLARpyA?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/_nRrXkvna0o?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row text-center myThumbnailVideo">
            <div class="col-lg-3">
                <iframe width="208" height="117" src="https://www.youtube.com/embed/j__KAElQ-o8?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/eEhwhZcfIgU?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/L7T9djJrWJQ?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/lNiSVNNE_Tg?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row text-center myThumbnailVideo">
            <div class="col-lg-3">
                <iframe width="208" height="117" src="https://www.youtube.com/embed/2gqkyMjG5uM?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/zZ6Fb1z8Y4Y?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/YavdHwUwm94?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
            <div class="col-lg-3">
                <iframe width="208" height="117"  src="https://www.youtube.com/embed/JMewgpPTMrE?list=PL-wgEWifvs_XbC70_fAPDWR4NcFHVgJie" frameborder="5" allowfullscreen></iframe>
            </div>
        </div>-->
    </div>
@endsection