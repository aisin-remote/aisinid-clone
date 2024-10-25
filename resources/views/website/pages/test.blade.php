@extends('website.layouts.master')
@section('title', 'test')
@section('pages')
  <style>
    #paper {
      width: 70%;
      height: 600px;
      border: 1px solid #ccc;
      float: right;
      margin: 20px;
    }

    #toolbox {
      width: 25%;
      float: left;
      margin: 20px;
      padding: 10px;
      border: 1px solid #ccc;
      background-color: #f9f9f9;
    }

    .tool {
      cursor: pointer;
      padding: 10px;
      margin: 10px;
      border: 1px solid #ccc;
      text-align: center;
      background-color: #fff;
    }

    .tool:hover {
      background-color: #e0e0e0;
    }
  </style>
  <div class="mainContents">
    <div class="pageHeader">
      <h1 class="pageTtl">Message from Top Management</h1>
      <section class="noticeSection" id="notice">
        <div id="toolbox">
          <h3>Shape Toolbox</h3>
          <div class="tool" id="rect-tool">Rectangle</div>
          <div class="tool" id="ellipse-tool">Ellipse</div>
        </div>

        <div class="d-flex">
          <div id="paper"></div>
        </div>

        <!-- Include jointJS and dependencies from CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.15/lodash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.4.0/backbone-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jointjs/3.5.5/joint.min.js"></script>

        <script>
          $(document).ready(function() {
            // Initialize the JointJS graph
            const graph = new joint.dia.Graph({}, { cellNamespace: namespace });

            // Create the paper (canvas) where the diagram will be displayed
            const paper = new joint.dia.Paper({
              el: $('#paper'), // Using jQuery to select the element
              model: graph,
              width: 300,
              height: 300,
              gridSize: 10,
              drawGrid: true,
            });
          });
        </script>
      </section>
    </div>
  </div>
@endsection
