 @extends('panel.layouts.app-private')
 @section('content')
 <div class="container">
     <div class="row justify-content-center">
         <div class="col-md-12">



             <main>

                 
                 <div class="mb-3 row justify-content-center">



                     <div class="col-8">

                         <div id="box1 note-master" class="note note-">
                             <!--  <div class="note-header">
                            <h2 class="note-title">title</h2 contenteditable="true">
                            <div class="note-icons">
                                <button class="pin-button"></button>
                                <button class="more-button"></button>
                            </div>
                        </div> -->
                             <div class="note-content" style="padding: 0px 0px;">
                                 <form name="noteForm" action="{{ route('notes.store') }}" method="Post">
                                     @csrf
                                     <input type="hidden" name="color" value="#ffffff">
                                     <input type="hidden" name="title" class="form-control" placeholder="Titulo">
                                     <textarea type="text" name="content" class="form-control" id="myeditorinstance"></textarea>


                                 </form>



                             </div>
                             <div class="note-footer">
                                 <div class="note-options">
                                     <!--    <button class="delete-button">

                                         <button onclick="createNote();">Crear Nota <i class="fa fa-plus" aria-hidden="true"></i></button>
                                     </button> -->


                                     <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                         <i class="fa fa-cog" aria-hidden="true"></i>
                                     </a>
                                     <ul class="dropdown-menu dropdown-menu-dark ps-1 pb-1">
                                         <li>
                                             <div class="color-option" style="background-color: #ffe66e;" onclick="changeColor('#ffe66e', '00')"></div>
                                             <div class="color-option" style="background-color: #a1ef9b;" onclick="changeColor('#a1ef9b', '00')"></div>
                                             <div class="color-option" style="background-color: #ffafdf;" onclick="changeColor('#ffafdf', '00')"></div>
                                             <div class="color-option" style="background-color: #d7afff;" onclick="changeColor('#d7afff', '00')"></div>
                                             <div class="color-option" style="background-color: #9edfff;" onclick="changeColor('#9edfff', '00')"></div>
                                             <div class="color-option" style="background-color: #e0e0e0;" onclick="changeColor('#e0e0e0', '00')"></div>
                                             <div class="color-option" style="background-color: #767676;" onclick="changeColor('#767676', '00')"></div>
                                         </li>


                                     </ul>


                                     <!--       <button class="option-button" onclick="showColorPanel(this)">
                                         <i class="fa fa-cog" aria-hidden="true"></i>
                                         <div id=" " style="display: none;">
                                             
                                             <div class="color-option" style="background-color: #ffe66e;" onclick="changeColor('#ffe66e', '00')"></div>
                                             <div class="color-option" style="background-color: #a1ef9b;" onclick="changeColor('#a1ef9b', '00')"></div>
                                             <div class="color-option" style="background-color: #ffafdf;" onclick="changeColor('#ffafdf', '00')"></div>
                                             <div class="color-option" style="background-color: #d7afff;" onclick="changeColor('#d7afff', '00')"></div>
                                             <div class="color-option" style="background-color: #9edfff;" onclick="changeColor('#9edfff', '00')"></div>
                                             <div class="color-option" style="background-color: #e0e0e0;" onclick="changeColor('#e0e0e0', '00')"></div>
                                             <div class="color-option" style="background-color: #767676;" onclick="changeColor('#767676', '00')"></div>
                                         
                                            </div>
                                     </button> -->
                                     <button class="archive-button"></button>

                                 </div>
                                 <div class="note-date">asaassasaass</div>
                             </div>
                         </div>

                     </div>
                     <div class="col-4 align-self-center">
                         <button class="align-middle btn btn-success" onclick="document.noteForm.submit();">Crear Nota <i class="fa fa-plus" aria-hidden="true"></i></button>
                         <div class=" position-relative">
                             <!--   <div class="position-absolute top-0 start-0"></div>
  <div class="position-absolute top-0 end-0"></div>
  <div class="position-absolute top-50 start-50"></div> -->
                             <div class="position-absolute top-50 start-50 translate-middle">
                                 <!-- <button class="align-middle btn btn-success" onclick="document.noteForms.submit();">Crear Nota <i class="fa fa-plus" aria-hidden="true"></i></button> -->
                             </div>
                             <!--  <div class="position-absolute bottom-0 start-0"></div>
  <div class="position-absolute bottom-0 end-0"></div> -->
                         </div>

                     </div>

                     <div class="col-6">

                        <!-- Modal -->
                         <div class="modal fade" id="editNoteModal" aria-labelledby="editNoteModal" data-bs-backdrop="static" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div id="box1" class="note note-00">

                                         <div class="note-content" style="padding: 0px 0px;">
                                             <form name="noteEditForm" method="POST">
                                             @method('PUT')
                                                 @csrf
                                                 <input type="hidden" name="color" value="#a7ffeb">
                                                 <input type="hidden" name="title" class="form-control" placeholder="Titulo" value="titulo">
                                                 <textarea type="text" name="content" class="form-control" id="contentEdit"></textarea>
                                               
 

                                             </form>



                                         </div>
                                          <div class="note-footer">
        <div class="note-options">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>
                    <ul id="" class=" dropdown-menu dropdown-menu-dark ps-1 pb-1">
                        <li>
                            <div class="color-option" style="background-color: #ffe66e;" onclick="changeColor('#ffe66e', '00')"></div>
                            <div class="color-option" style="background-color: #a1ef9b;" onclick="changeColor('#a1ef9b', '00')"></div>
                            <div class="color-option" style="background-color: #ffafdf;" onclick="changeColor('#ffafdf', '00')"></div>
                            <div class="color-option" style="background-color: #d7afff;" onclick="changeColor('#d7afff', '00')"></div>
                            <div class="color-option" style="background-color: #9edfff;" onclick="changeColor('#9edfff', '00')"></div>
                            <div class="color-option" style="background-color: #e0e0e0;" onclick="changeColor('#e0e0e0', '00')"></div>
                            <div class="color-option" style="background-color: #767676;" onclick="changeColor('#767676', '00')"></div>
                        </li>


                    </ul>
                </li>
                <li class="list-inline-item">

                    <button class="tgw-note-list-btn" type="button" onclick="prepareEdit('note-00', '00')"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                </li>

                <li class="list-inline-item">

                    <button type="button" onclick="openNote('note-00', 00)"><i class="fa fa-eye" aria-hidden="true"></i></button>

                </li>
                <li class="list-inline-item">
                    <form action="" method="Post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </li>
                <li class="list-inline-item">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </li>
                <li class="list-inline-item">
                    <div class="note-date">asdasdasdasdasdasd</div>
                </li>
            </ul>
 
        </div>

    </div>
                                     </div>


                                 </div>
                             </div>
                         </div>


                         





                     </div> <!-- end col-md-6 -->

                 </div>




                 <div class="mb-3 row justify-content-center">

<div class="col-12">

<div class="note-container">

@foreach ($note as $nota)

<div id="note-{{$nota->id}}" class="note note-{{$nota->id}}" style="background-color:{{$nota->color}};" onclick="console.log(this.id)">
    <!--  <div class="note-header">
           <h2 class="note-title">{{ $nota->title }}</h2>
           <div class="note-icons">
               <button class="pin-button"></button>
               <button class="more-button"></button>
           </div>
       </div> -->
    <div class="note-content">
        <p>{!! $nota->content !!}</p>
    </div>
    <div class="note-footer">
        <div class="note-options">
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog" aria-hidden="true"></i>
                    </a>
                    <ul id="color-menu-{{$nota->id}}" class=" dropdown-menu dropdown-menu-dark ps-1 pb-1">
                        <li>
                            <div class="color-option" style="background-color: #ffe66e;" onclick="changeColor('#ffe66e', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #a1ef9b;" onclick="changeColor('#a1ef9b', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #ffafdf;" onclick="changeColor('#ffafdf', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #d7afff;" onclick="changeColor('#d7afff', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #9edfff;" onclick="changeColor('#9edfff', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #e0e0e0;" onclick="changeColor('#e0e0e0', '{{$nota->id}}')"></div>
                            <div class="color-option" style="background-color: #767676;" onclick="changeColor('#767676', '{{$nota->id}}')"></div>
                        </li>


                    </ul>
                </li>
                <li class="list-inline-item">

                    <button class="tgw-note-list-btn" type="button" onclick="prepareEdit('note-{{$nota->id}}', '{{$nota->id}}')"><i class="fa fa-pencil" aria-hidden="true"></i></button>

                </li>

                <li class="list-inline-item">

                    <button class="tgw-note-list-btn" type="button" onclick="openNote('note-{{$nota->id}}', {{$nota->id}})"><i class="fa fa-eye" aria-hidden="true"></i></button>

                </li>
                <li class="list-inline-item">
                    <form action="{{ route('notes.destroy',$nota->id) }}" method="Post">
                        @csrf
                        @method('DELETE')
                        <button class="tgw-note-list-btn" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                    </form>
                </li>
<!--                 <li class="list-inline-item">

<button class="tgw-note-list-btn" type="button" onclick="openNote('note-{{$nota->id}}', {{$nota->id}})"><i class="fa fa-eye" aria-hidden="true"></i></button>

</li> -->
                
                <li class="list-inline-item">
                    <div class="note-date">{{ $nota->updated_at }}</div>
                </li>

                <!--  <li class="list-inline-item">
                <button type="button"  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </li>   -->
            </ul>





            <!--       <button class="option-button" onclick="showColorPanel(this)">
                <i class="fa fa-cog" aria-hidden="true"></i>
                <div id="color-menu-{{$nota->id}}" style="display: none;">
                   
                    <div class="color-option" style="background-color: #ffcc80;" onclick="changeColor('#ffcc80', '{{$nota->id}}')"></div>
                    <div class="color-option" style="background-color: #a7ffeb;" onclick="changeColor('#a7ffeb', '{{$nota->id}}')"></div>
                    <div class="color-option" style="background-color: #b39ddb;" onclick="changeColor('#b39ddb', '{{$nota->id}}')"></div>
                    <div class="color-option" style="background-color: #ffcdd2;" onclick="changeColor('#ffcdd2', '{{$nota->id}}')"></div>
                    <div class="color-option" style="background-color: #e6ee9c;" onclick="changeColor('#e6ee9c', '{{$nota->id}}')"></div>
                </div>
            </button> -->
            <!--  <button class="archive-button"></button> -->
            <!--    <button class="delete-button">
                <form action="{{ route('notes.destroy',$nota->id) }}" method="Post">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </form>


            </button> -->
        </div>

    </div>
</div>

@endforeach




</div>
</div>
</div>



                 

         </div>
     </div>
     <script src="{{ Vite::asset('node_modules/tinymce/tinymce.js') }}"></script>

     <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> 
 <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>-->
     <script>
         const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
         const appendAlert = (message, type) => {
             const wrapper = document.createElement('div')
             wrapper.innerHTML = [
                 `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                 `   <div>${message}</div>`,
                 '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                 '</div>'
             ].join('')

             alertPlaceholder.append(wrapper)
         }

         const alertTrigger = document.getElementById('liveAlertBtn')
         if (alertTrigger) {
             alertTrigger.addEventListener('click', () => {
                 appendAlert('Nice, you triggered this alert message!', 'success')
             })
         }




         document.addEventListener("DOMContentLoaded", () => {


/*             $('.box').on('click', function () {
    $('body').toggleClass('nooverflow');
    $(this).toggleClass('grow');
}); */

             console.log("Hello World!");
             tinymce.init({
                 skin: 'oxide',
                 toolbar: false,
                 menubar: false,
                 selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',

                 //    content_css: ['{{ Vite::asset("node_modules/tinymce/skins/content/default/content.min.css") }}'] 

             });




         });
     </script>


     <script>
         console.log('help');

         function showColorPanel(element) {
             console.log("el:", element);
             const collection = element.children;

             //element.querySelector('#color-menu');

             console.log("el:", collection[1].style.display);

             if (collection[1].style.display == 'block') {

                 collection[1].style.display = 'none';

                 console.log("none");

             } else {

                 console.log("block");
                 collection[1].style.display = 'block';
             }


             console.log("collection[0]:", collection[1]);
             // var note = document.querySelector('.note');
             //  var id = "color-menu-"+element;
             //   console.log(element);
             //var colorMenu =  element.querySelector('#color-menu');
             // document.querySelector('#color-menu-' + element);

             //	colorMenu.style.display = 'block';


         }


         function changeColor(color, id) {

             document.noteForm.color.value = color;

             if (id == 00) {
                 document.querySelector('#myeditorinstance_ifr').style.backgroundColor = color;
                 document.querySelector('.tox .tox-statusbar').style.backgroundColor = color;

                 document.querySelector('.tox .tox-statusbar').style.borderTop = '1px solid ' + color;
             }



             var note = document.querySelector('.note-' + id);
             var colorMenu = document.querySelector('#color-menu' + id);
             console.log("Color" + color);
             if (!color) {
                 console.log("Color1" + color);
             } else {

                 note.style.backgroundColor = color;
             }

             var url = "{{route('notes/updateColor')}}"; // URL del endpoint de la API
             var data = {
                 id: id,
                 color: color,
                 _token: "{{ csrf_token() }}",
             }; // Datos a enviar

             fetch(url, {
                     method: "POST",
                     headers: {
                         "Content-Type": "application/json"
                     },
                     body: JSON.stringify(data)
                 })
                 .then(function(response) {
                     if (response.ok) {
                         return response.json();
                     }
                     throw new Error("Error en la respuesta de la API");
                 })
                 .then(function(data) {
                     console.log(data); // Datos de respuesta de la API
                 })
                 .catch(function(error) {
                     console.log(error);
                 });

         }


         function createNote() {

             var url = "{{route('notes.store')}}"; // URL del endpoint de la API
             var data = {
                 title: 'title',
                 content: "ss",
                 color: '#a7ffeb',
                 _token: "{{ csrf_token() }}",
             }; // Datos a enviar

             fetch(url, {
                     method: "POST",
                     headers: {
                         "Content-Type": "application/json"
                     },
                     body: JSON.stringify(data)
                 })
                 .then(function(response) {
                     console.log("response: ", response)
                     if (response.ok) {
                         return response.json();
                     }
                     throw new Error("Error en la respuesta de la API");
                 })
                 .then(function(data) {
                     console.log("data: ", data); // Datos de respuesta de la API
                     appendAlert(data.message, 'success')
                 })
                 .catch(function(error) {
                     console.log("error: ", error);
                 });
         }


         function slidetoggle() {

             document.querySelectorAll(this.getAttribute('data-slidetoggle')).forEach(el => {
                 const ch = el.clientHeight,
                     sh = el.scrollHeight,
                     isCollapsed = !ch,
                     noHeightSet = !el.style.height;

                 console.log(ch);
                 console.log(sh);
                 console.log(isCollapsed);
                 console.log(noHeightSet);

                 el.style.height = (isCollapsed || noHeightSet ? 444 : 0) + "px";
                 if (noHeightSet) return slidetoggle.call(this);



             });
         }



         document.querySelectorAll("[data-slidetoggle]").forEach(el => el.addEventListener('click', slidetoggle));



        
     </script>

<script type="text/javascript">
  
 


   
    function prepareEdit(note_id, id) {

        var $id = id;
        var color = document.getElementById(note_id).style.backgroundColor;
        var content = document.querySelector("#"+note_id+" > .note-content").innerHTML;
console.log("Nota a Editar: " + note_id);
console.log(document.querySelector("#"+note_id+" > .note-content").innerHTML);

console.log(document.getElementById(note_id).style.backgroundColor);
document.querySelector(".note-00  #contentEdit").value = content;
/* document.querySelector(".note-00 > .note-content").innerHTML = content;  */
tinymce.init({
                 skin: 'oxide',
                 toolbar: false,
                 menubar: false,
                 selector: 'textarea#contentEdit', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
             });
             tinyMCE.activeEditor.setContent(content);

             setTimeout(() => {
  console.log("Delayed for 1 second.");
  document.querySelector('#contentEdit_ifr').style.backgroundColor = color;
  document.querySelector('.note-00').style.backgroundColor = color;
  document.querySelector('.note-00 .tox .tox-statusbar').style.backgroundColor = color;
 document.querySelector('.note-00 .tox .tox-statusbar').style.borderTop = '1px solid ' + color;
 var galleryModal = new bootstrap.Modal(document.getElementById('editNoteModal'), {
  keyboard: false
});


/* document.noteEditForm.content.value = ; */
document.noteEditForm.color.value = color;
const url = "{{route('notes.update', '$id')}}";
console.log(url);
document.noteEditForm.action= url.replace('%24id', id);
 
console.log(document.noteEditForm.action);
galleryModal.show();
}, "0100");
/*  document.querySelector('.note-00 .tox .tox-statusbar').style.backgroundColor = color;
 document.querySelector('.note-00 .tox .tox-statusbar').style.borderTop = '1px solid ' + color;   */

         /*     document.querySelector('.note-00 #contentEdit_ifr').style.backgroundColor = color;
                   document.querySelector('.note-00 .tox .tox-statusbar').style.backgroundColor = color;

                 document.querySelector('.note-00 .tox .tox-statusbar').style.borderTop = '1px solid ' + color;  
 */


 
}


function openNote(note_id, id){

console.log("ID:"+id);

 
var element = document.getElementById(note_id);
/*   element.classList.toggle("grow");
  document.body.classList.toggle('nooverflow');
  document.body.classList.toggle('modal-open');

  const backdrop = document.createElement("div");
  backdrop.classList.add('modal-backdrop', 'fade', 'show')
  document.body.appendChild(backdrop);
  console.log("ID:", element); */

  var $id = id;
        var color = document.getElementById(note_id).style.backgroundColor;
        var content = document.querySelector("#"+note_id+" > .note-content").innerHTML;
console.log("Nota a Editar: " + note_id);
console.log(document.querySelector("#"+note_id+" > .note-content").innerHTML);

console.log(document.getElementById(note_id).style.backgroundColor);
document.querySelector(".note-00  #contentEdit").value = content;
/* document.querySelector(".note-00 > .note-content").innerHTML = content;  */
tinymce.init({
                 skin: 'oxide',
                 toolbar: false,
                 menubar: false,
                 selector: 'textarea#contentEdit', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
             });
             tinyMCE.activeEditor.setContent(content);

             setTimeout(() => {
  console.log("Delayed for 1 second.");
  document.querySelector('#contentEdit_ifr').style.backgroundColor = color;
  document.querySelector('.note-00').style.backgroundColor = color;
  document.querySelector('.note-00 .tox .tox-statusbar').style.backgroundColor = color;
 document.querySelector('.note-00 .tox .tox-statusbar').style.borderTop = '1px solid ' + color;
 var galleryModal = new bootstrap.Modal(document.getElementById('editNoteModal'), {
  keyboard: false
});


/* document.noteEditForm.content.value = ; */
document.noteEditForm.color.value = color;
const url = "{{route('notes.update', '$id')}}";
console.log(url);
document.noteEditForm.action= url.replace('%24id', id);
 
console.log(document.noteEditForm.action);
galleryModal.show();
}, "0100");


}

 


 
</script>



     @if ($message = Session::get('success'))
     <div class="toast-container position-fixed bottom-0 end-0 p-3">
         <div id="liveToast" class="toast show text-bg-success" role="alert" aria-live="assertive" aria-atomic="true">
             <div class="toast-body">
                 {{ $message }}
             </div>
         </div>
     </div>
     @endif

     @error('title')
     <div class="toast-container position-fixed bottom-0 end-0 p-3">
         <div id="liveToast" class="toast show text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
             <div class="toast-body">
                 {{ $message }}
             </div>
         </div>
     </div>
     @enderror

     @error('content')
     <div class="toast-container position-fixed bottom-0 end-0 p-3">
         <div id="liveToast" class="toast show text-bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
             <div class="toast-body">
                 {{ $message }}
             </div>
         </div>
     </div>
     @enderror


     @endsection