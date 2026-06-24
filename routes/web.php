use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/register', fn() => view('register'));
Route::get('/login', fn() => view('login'));
Route::get('/dashboard', fn() => view('dashboard'));