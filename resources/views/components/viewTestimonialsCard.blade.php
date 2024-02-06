 <h2>Temoignages Cards</h2>
 <div class="testimonials">
     @foreach ($temoignages as $temoignage)
     <div class="temoignagesItemList">
         <div class="imgContainer">
             @if($temoignage->image == null)
             <img src="https://img.freepik.com/free-vector/businessman-character-avatar-isolated_24877-60111.jpg" alt="">
             @else
             <img src="{{ asset($temoignage->image) }}" alt="{{ $temoignage->titre }}">
             @endif
         </div>
         <h3>{{ $temoignage->titre }}</h3>
         <p>{{ $temoignage->message }}</p>
     </div>
     @endforeach
 </div>
