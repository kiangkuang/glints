@extends('layouts.app')

@section('content')
<style>
.loader {
  margin: 130px auto 60px auto;
  font-size: 25px;
  width: 1em;
  height: 1em;
  border-radius: 50%;
  position: relative;
  text-indent: -9999em;
  -webkit-animation: load5 1.1s infinite ease;
  animation: load5 1.1s infinite ease;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
}
@-webkit-keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #808080, 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.5), -1.8em -1.8em 0 0em rgba(128,128,128, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.7), 1.8em -1.8em 0 0em #808080, 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.5), 1.8em -1.8em 0 0em rgba(128,128,128, 0.7), 2.5em 0em 0 0em #808080, 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.5), 2.5em 0em 0 0em rgba(128,128,128, 0.7), 1.75em 1.75em 0 0em #808080, 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.5), 1.75em 1.75em 0 0em rgba(128,128,128, 0.7), 0em 2.5em 0 0em #808080, -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.5), 0em 2.5em 0 0em rgba(128,128,128, 0.7), -1.8em 1.8em 0 0em #808080, -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.5), -1.8em 1.8em 0 0em rgba(128,128,128, 0.7), -2.6em 0em 0 0em #808080, -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.5), -2.6em 0em 0 0em rgba(128,128,128, 0.7), -1.8em -1.8em 0 0em #808080;
  }
}
@keyframes load5 {
  0%,
  100% {
    box-shadow: 0em -2.6em 0em 0em #808080, 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.5), -1.8em -1.8em 0 0em rgba(128,128,128, 0.7);
  }
  12.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.7), 1.8em -1.8em 0 0em #808080, 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.5);
  }
  25% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.5), 1.8em -1.8em 0 0em rgba(128,128,128, 0.7), 2.5em 0em 0 0em #808080, 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  37.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.5), 2.5em 0em 0 0em rgba(128,128,128, 0.7), 1.75em 1.75em 0 0em #808080, 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  50% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.5), 1.75em 1.75em 0 0em rgba(128,128,128, 0.7), 0em 2.5em 0 0em #808080, -1.8em 1.8em 0 0em rgba(128,128,128, 0.2), -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  62.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.5), 0em 2.5em 0 0em rgba(128,128,128, 0.7), -1.8em 1.8em 0 0em #808080, -2.6em 0em 0 0em rgba(128,128,128, 0.2), -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  75% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.5), -1.8em 1.8em 0 0em rgba(128,128,128, 0.7), -2.6em 0em 0 0em #808080, -1.8em -1.8em 0 0em rgba(128,128,128, 0.2);
  }
  87.5% {
    box-shadow: 0em -2.6em 0em 0em rgba(128,128,128, 0.2), 1.8em -1.8em 0 0em rgba(128,128,128, 0.2), 2.5em 0em 0 0em rgba(128,128,128, 0.2), 1.75em 1.75em 0 0em rgba(128,128,128, 0.2), 0em 2.5em 0 0em rgba(128,128,128, 0.2), -1.8em 1.8em 0 0em rgba(128,128,128, 0.5), -2.6em 0em 0 0em rgba(128,128,128, 0.7), -1.8em -1.8em 0 0em #808080;
  }
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Amazon Scraper</div>

                <div class="panel-body">
                    <form id="scrapeForm" class="form-horizontal" method="post" action="/scrape/process">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label for="skill-name" class="col-sm-3 control-label">Skill</label>
                            <div class="col-sm-6">
                                <input type="text" name="skill" id="skill-name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button id="scrape" type="submit" class="btn btn-default">
                                    <i class="fa fa-search"></i> Scrape
                                </button>
                            </div>
                            <div class="loader hidden">Loading...</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $("#scrape").click(function(event) {
        $("#scrape").addClass("disabled").html("Scraping... It might take awhile...");
        $(".loader").removeClass("hidden");
    })
</script>
@endsection