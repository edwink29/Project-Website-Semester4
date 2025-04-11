<x-layoutAuth title="Login">
  <div class="flex min-h-screen items-center justify-center bg-gradient-to-br from-gray-100 to-gray-100 px-4">
      <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8 space-y-6">
          <div class="w-full flex justify-center">
            <img src="{{ asset('images/stipress.png') }}" alt="Logo Aplikasi" class="h-24">
          </div>

          <form method="POST" class="space-y-5">
              @csrf

              <div>
                  <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                  <input type="text" name="username" id="username" required
                      class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Masukkan username...">
              </div>

              <div>
                  <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                  <input type="password" name="password" id="password" required
                      class="mt-1 w-full px-4 py-2 border rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Masukkan password...">
              </div>

              <div class="flex items-center justify-between text-sm">
                  <label class="flex items-center">
                      <input type="checkbox" class="mr-2" name="remember">
                      Remember me
                  </label>
                  <a href="/lupa_password" class="text-blue-600 hover:underline">Lupa password?</a>
              </div>

              <button type="submit"
                  class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-300">
                  Login
              </button>
          </form>

          <div class="text-center text-sm text-gray-500">
              Tahap registrasi harus
              <a href="/validasi_awal" class="text-blue-600 hover:underline">Validasi Akun!</a>
          </div>
      </div>
  </div>
</x-layoutAuth>
