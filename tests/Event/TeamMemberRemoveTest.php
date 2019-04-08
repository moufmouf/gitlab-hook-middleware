<?php

namespace TheCodingMachine\GitlabHook;

use PHPUnit\Framework\TestCase;
use TheCodingMachine\GitlabHook\Model\Event\TeamMemberRemove;

class TeamMemberRemoveTest extends TestCase {

    /**
     * @return mixed[]
     */
    private function getData($filename = 'team_member_remove'): array {
        $data = file_get_contents(__DIR__ . '/../fixtures/'.$filename.'.json');
        return json_decode($data, true);
    }

    public function testGetters() {
        $event = new TeamMemberRemove($this->getData());

        $createdAt = $event->getCreatedAt();
        $this->assertInstanceOf(\DateTimeImmutable::class, $createdAt);
        $this->assertSame('2012-07-21 07:30:56', $createdAt->format('Y-m-d H:i:s'));

        $updatedAt = $event->getUpdatedAt();
        $this->assertInstanceOf(\DateTimeImmutable::class, $updatedAt);
        $this->assertSame('2012-07-21 07:38:22', $updatedAt->format('Y-m-d H:i:s'));

        $this->assertSame('Maintainer', $event->getProjectAccess());
        $this->assertSame(74, $event->getProjectId());
        $this->assertSame('StoreCloud', $event->getProjectName());
        $this->assertSame('storecloud', $event->getProjectPath());
        $this->assertSame('jsmith/storecloud', $event->getProjectPathWithNamespace());
        $this->assertSame('johnsmith@gmail.com', $event->getUserEmail());
        $this->assertSame('John Smith', $event->getUserName());
        $this->assertSame('johnsmith', $event->getUserUsername());
        $this->assertSame(41, $event->getUserId());
        $this->assertSame('private', $event->getProjectVisibility());
    }

}
