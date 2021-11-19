<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Work;

class WorkApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_work()
    {
        $work = Work::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/works', $work
        );

        $this->assertApiResponse($work);
    }

    /**
     * @test
     */
    public function test_read_work()
    {
        $work = Work::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/works/'.$work->id
        );

        $this->assertApiResponse($work->toArray());
    }

    /**
     * @test
     */
    public function test_update_work()
    {
        $work = Work::factory()->create();
        $editedWork = Work::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/works/'.$work->id,
            $editedWork
        );

        $this->assertApiResponse($editedWork);
    }

    /**
     * @test
     */
    public function test_delete_work()
    {
        $work = Work::factory()->create();

        $this->response = $this->json(
            'DELETE',
             '/api/works/'.$work->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/works/'.$work->id
        );

        $this->response->assertStatus(404);
    }
}
