<?php
/**
 * (C) Copyright 2018 Nuxeo SA (http://nuxeo.com/) and contributors.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Nuxeo\Client\Objects\Workflow;


use JMS\Serializer\Annotation as Serializer;
use Nuxeo\Client\Constants;
use Nuxeo\Client\Objects\AbstractEntityList;

class Tasks extends AbstractEntityList {

  /**
   * @var Task[]
   * @Serializer\Type("array<Nuxeo\Client\Objects\Workflow\Task>")
   */
  private $entries = [];

  /**
   * Documents constructor.
   */
  public function __construct() {
    parent::__construct(Constants::ENTITY_TYPE_TASKS);
  }

  /**
   * @return Task[]
   */
  protected function &getEntries() {
    return $this->entries;
  }

}
