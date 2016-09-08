<?php
/// @brief
class ModelAdmin extends \HHH\Model
{
    /// @brief
    public function getAll()
    {
        $sql = "select * from tbl_admin";

        try
        {
            return $this->composeValidReply($this->db->query($sql)->fetchAll());
        }
        catch (PDOException $e)
        {
            $this->logger->critical($e->getMessage());
            return $this->composeErrorReply(1, $e->getMessage());
        }
    }

    /// @brief
    ///
    /// @param $id
    public function getByID($id)
    {
        $sql = "select * from tbl_admin where id_admin = :id_admin";

        try
        {
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':id_admin', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $this->composeValidReply($stmt->fetchAll());
        }
        catch (PDOException $e)
        {
            $this->logger->critical($e->getMessage());
            return $this->composeErrorReply(1, $e->getMessage());
        }
    }
}
