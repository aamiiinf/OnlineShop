<?php namespace Tests\Repositories;

use App\Models\Work;
use App\Repositories\WorkRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class WorkRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var WorkRepository
     */
    protected $workRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->workRepo = \App::make(WorkRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_work()
    {
        $work = Work::factory()->make()->toArray();

        $createdWork = $this->workRepo->create($work);

        $createdWork = $createdWork->toArray();
        $this->assertArrayHasKey('id', $createdWork);
        $this->assertNotNull($createdWork['id'], 'Created Work must have id specified');
        $this->assertNotNull(Work::find($createdWork['id']), 'Work with given id must be in DB');
        $this->assertModelData($work, $createdWork);
    }

    /**
     * @test read
     */
    public function test_read_work()
    {
        $work = Work::factory()->create();

        $dbWork = $this->workRepo->find($work->id);

        $dbWork = $dbWork->toArray();
        $this->assertModelData($work->toArray(), $dbWork);
    }

    /**
     * @test update
     */
    public function test_update_work()
    {
        $work = Work::factory()->create();
        $fakeWork = Work::factory()->make()->toArray();

        $updatedWork = $this->workRepo->update($fakeWork, $work->id);

        $this->assertModelData($fakeWork, $updatedWork->toArray());
        $dbWork = $this->workRepo->find($work->id);
        $this->assertModelData($fakeWork, $dbWork->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_work()
    {
        $work = Work::factory()->create();

        $resp = $this->workRepo->delete($work->id);

        $this->assertTrue($resp);
        $this->assertNull(Work::find($work->id), 'Work should not exist in DB');
    }
}
