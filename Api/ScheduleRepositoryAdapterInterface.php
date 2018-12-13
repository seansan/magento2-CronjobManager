<?php

namespace EthanYehuda\CronjobManager\Api;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * Adapter used by REST API to work around the lack of data getters and setters in \Magento\Cron\Model\Schedule
 * making the core cron model incompatible with param and result resolvers.
 */
interface ScheduleRepositoryAdapterInterface
{
    /**
     * @param int $scheduleId
     * @return \EthanYehuda\CronjobManager\Api\Data\ScheduleInterface
     * @throws NoSuchEntityException
     */
    public function get(int $scheduleId): \EthanYehuda\CronjobManager\Api\Data\ScheduleInterface;

    /**
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \EthanYehuda\CronjobManager\Api\Data\ScheduleSearchResultsInterface
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria): \Magento\Framework\Api\SearchResultsInterface;

    /**
     * @param \EthanYehuda\CronjobManager\Api\Data\ScheduleInterface $schedule
     * @param int $scheduleId
     * @return \EthanYehuda\CronjobManager\Api\Data\ScheduleInterface
     * @throws CouldNotSaveException
     */
    public function save(\EthanYehuda\CronjobManager\Api\Data\ScheduleInterface $schedule, $scheduleId = null): \EthanYehuda\CronjobManager\Api\Data\ScheduleInterface;
}
