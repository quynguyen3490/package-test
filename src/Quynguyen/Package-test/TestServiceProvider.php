use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('test', function()
        {
            return new Test;
        });
    }

}