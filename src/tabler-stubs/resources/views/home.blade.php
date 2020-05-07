@extends('layouts.full-page')

@section('content')
<div class="container-xl d-flex flex-column justify-content-center">
  <div class="page-header">
    <div class="row align-items-center">
      <div class="col-auto">
        <!-- Page pre-title -->
        <div class="page-pretitle">
          Overview
        </div>
        <h2 class="page-title">
          Dashboard
        </h2>
      </div>
      <!-- Page title actions -->
      <div class="col-auto ml-auto d-print-none">
        <span class="d-none d-sm-inline">
          <a href="#" class="btn btn-white">
            New view
          </a>
        </span>
        <a href="#" class="btn btn-primary ml-3 d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-report">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
          Create new report
        </a>
        <a href="#" class="btn btn-primary ml-3 d-sm-none btn-icon" data-toggle="modal" data-target="#modal-report" aria-label="Create new report">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
        </a>
      </div>
    </div>
  </div>
  <div class="empty">
    <div class="empty-icon">
      <img src="./static/illustrations/undraw_printing_invoices_5r4r.svg" height="128" class="mb-4" alt="">
    </div>
    <p class="empty-title h3">There's nothing here.</p>
    <p class="empty-subtitle text-muted">
      Try building something new.
    </p>
  </div>
</div>
@endsection
