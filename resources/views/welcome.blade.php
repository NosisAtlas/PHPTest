<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Temoignages</title>
</head>
<body>
   {{-- Adding testimonials form --}}
    <form class="addTestionialsForm" action="{{ route('temoignage.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="inputElems">
            <label for="">TITRE *</label><br>
            <input name="titre" type="text">
        </div>
        <div class="inputElems">
            <label for="">IMAGE</label><br>
            <input name="image" accept=".doc, .docx, .jpeg, .png" type="file">
        </div>
        <div class="inputElems">
            <label for="">MESSAGE *</label><br>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="AJOUTER NOUVEAU TEMOIGNAGE">
    </form>
   {{-- Adding testimonials form END --}}

   <div class="mb-5">
        <button class="btn btnCustomColor" id="showAsCardsBtn">Show as Cards</button>
        <button class="btn btnCustomColor" id="showAsListBtn">Show as List</button>
    </div>


    {{-- Viewing testimonials cards --}}
    <div id="viewTestimonialsCard" class="components">
        @include('components.viewTestimonialsCard')
    </div>
    {{-- Viewing testimonials cards END --}}

    {{-- Viewing testimonials list --}}
    <div id="viewTestimonialsList" class="components">
        @include('components.viewTestimonialsList')
    </div>
    {{-- Viewing testimonials list END --}}


    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- jQuery UI library -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script>
        // Handling the reorder of the TR elements
        $(function() {
            $("tbody").sortable({
                axis: "y", // Allow vertical dragging only
            });
        });

        $(document).ready(function() {
            $('#viewTestimonialsCard').show();
            $('#viewTestimonialsList').hide();


            // Show card view when "Show as Cards" button is clicked
            $('#showAsCardsBtn').click(function() {
                $('#viewTestimonialsCard').show();
                $('#viewTestimonialsList').hide();
            });

            // Show list view when "Show as List" button is clicked
            $('#showAsListBtn').click(function() {
                $('#viewTestimonialsCard').hide();
                $('#viewTestimonialsList').show();
            });
        });
    </script>

</body>
</html>
