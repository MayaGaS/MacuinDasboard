<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <title>Cancelar Tickets</title>
</head>
<body class="bg-white-200">
    @include('partials/navbar')

    <script>
      @if(isset($mensaje))
          Swal.fire({
              position: "center",
              icon: "success",
              title: "Ticket eliminado",
              showConfirmButton: false,
              timer: 1500
          });
      @endif
  </script>
  

    <div class="flex justify-center mt-8">
        <form  action="/eliminarTicketM" class="bg-gray-100 p-6 rounded-lg w-96">
          <h2 class="text-xl mb-4">Cancelar Tickets</h2>
          
          <div class="mb-4">
            <label for="ticketNumber" class="sr-only">No.Ticket</label>
            <input type="text" id="ticketNumber" name="ticketNumber" placeholder="No.Ticket" 
                  class="bg-white border rounded-lg w-full p-2" required>
          </div>
      
          <div class="mb-4">
            <label for="date" class="sr-only">Fecha</label>
            <input type="date" id ="date" name ="date"
                  class ="bg-white border rounded-lg w-full p-2" required>
          </div>
      
          <!-- Agrega más campos de entrada según sea necesario -->
      
          <div class="flex justify-center"> <!-- Centra el botón -->
            <button type ="submit"
                    class ="bg-purple-500 text-white rounded-lg px-4 py-2 mt -4 hover:bg-red -600 focus:outline-none focus:border-red -700 focus:ring focus:ring-red -200 active:bg-red -700"
                    >Cancelar</button>
          </div>
        </form>
      </div>
    </body>
    </html>
