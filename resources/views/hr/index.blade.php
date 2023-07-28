<x-hr-layout>
  <!-- Content Start -->
<div class="container text-center mt-5 pt-5">
  <div class="row justify-content-start">
    <div class="col-auto">
      <h1>Good {{$messageDashboard}},</h1>
    </div>
  </div>
  <div class="row justify-content-start">
    <div class="col-auto font-bold">
      <p class="namaOrang font-color1" style="">{{ Auth::user()->name }} - Human Resources</p>
    </div>
  </div>
</div>

<!-- Content End -->
</x-hr-layout>