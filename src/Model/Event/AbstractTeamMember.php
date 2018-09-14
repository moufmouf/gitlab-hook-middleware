<?php
namespace TheCodingMachine\GitlabHook\Model\Event;

use TheCodingMachine\GitlabHook\EventInterface;
use TheCodingMachine\GitlabHook\Model\AbstractObject;

abstract class AbstractTeamMember extends AbstractObject implements EventInterface
{
    /**
     * @return \DateTimeImmutable
     */
    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->getDateTimeAttribute('created_at');
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->getDateTimeAttribute('updated_at');
    }

    /**
     * @return string
     */
    public function getProtectAccess(): string
    {
        return $this->getAttribute('project_access');
    }

    /**
     * @return int
     */
    public function getProjectId(): int
    {
        return $this->getAttribute('project_id');
    }

    /**
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->getAttribute('project_name');
    }

    /**
     * @return string
     */
    public function getProjectPath(): string
    {
        return $this->getAttribute('project_path');
    }

    /**
     * @return string
     */
    public function getProjectPathWithNamespace(): string
    {
        return $this->getAttribute('project_path_with_namespace');
    }

    /**
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->getAttribute('user_email');
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->getAttribute('user_name');
    }

    /**
     * @return string
     */
    public function getUserUsername(): string
    {
        return $this->getAttribute('user_username');
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->getAttribute('user_id');
    }

    /**
     * @return string
     */
    public function getProjectVisibility(): string
    {
        return $this->getAttribute('project_visibility');
    }
}
